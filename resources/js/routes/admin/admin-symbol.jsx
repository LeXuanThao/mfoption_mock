import { ChartBarSquareIcon, PencilSquareIcon, TrashIcon } from '@heroicons/react/16/solid'
import { useEffect, useState } from 'react';


export default function AdminSymbol()
{
    const [symbols, setSymbols] = useState([]);
    const [underlyerSymbols, setUnderlyerSymbols] = useState([]);
    const [exchanges, setExchanges] = useState([]);

    const loadSymbols = async () => {
        let data = await fetch('/api/symbols');
        data = await data.json();
        setSymbols(data.data);
    }

    const loadExchanges = async () => {
        let data = await fetch('/api/exchanges');
        data = await data.json();
        setExchanges(data.data);
    }

    const loadUnderlyers = async () => {
        let data = await fetch('/api/symbols/underlyers');
        data = await data.json();
        setUnderlyerSymbols(data.data);
    }

    const createSymbol = async (formData, successCallback, failCallback) => {
        await fetch('/api/symbols', {
            method: 'POST',
            body: formData
        }).then(response => {
            if (response.status == 200) {
                successCallback();
            } else {
                failCallback();
            }
        }).catch(error => {
            failCallback();
        });
    }

    const handleSubmit = async (event) => {
        event.preventDefault();
        createSymbol(new FormData(event.target), () => {
            loadSymbols();
            alert('Symbol created.');
        }, () => {
            alert('Failed to create symbol.');
        });
        return false;
    }

    useEffect(() => {
        loadSymbols();
        loadExchanges();
        loadUnderlyers();
    }, [])
    
    return <>
        <h2>Symbol</h2>
        <div className="mb-2">
            <button variant="primary">Add Symbol</button>
        </div>
        <ul className="listing mb-3">
            {symbols.length > 0 && symbols.map((symbol, index) => {
                return <li key={index}>
                    <h3>{symbol.name} <span className="tag">{symbol.type}</span></h3>
                    <ChartBarSquareIcon className='size-4' />
                    <PencilSquareIcon className='size-4' />
                    <TrashIcon className='size-4' />
                    <p>{symbol.description}</p>
                </li>
            })}
            {symbols.length == 0 && <li>No symbols found.</li>}
        </ul>

        <h2>Create Symbol</h2>
        <form onSubmit={handleSubmit} method="POST">
            <ul className="form">
                <li>
                    <label className="block">Code</label>
                    <input className="w-full border rounded py-1 px-2 shadow-sm" type="text" name="code"/>
                </li>
                <li>
                    <label className="block">Name</label>
                    <input className="w-full border rounded py-1 px-2 shadow-sm" type="text" name="name" />
                </li>
                <li>
                    <label className="block">Description</label>
                    <textarea className="w-full border rounded py-1 px-2 shadow-sm"></textarea>
                </li>
                <li>
                    <label className="block">Exchange</label>
                    <select className="w-full border rounded py-2 px-1 shadow-sm" name="exchange_id">
                        {exchanges.length > 0 && exchanges.map((exchange, index) => {
                            return <option key={index} value={exchange.id}>{exchange.code}: {exchange.name}</option>
                        })}
                    </select>
                </li>
                <li>
                    <label className="block">Type</label>
                    <select className="w-full border rounded py-2 px-1 shadow-sm" name="type">
                        <option value="index">Index</option>
                        <option value="future">Future</option>
                        <option value="option">Option</option>
                    </select>
                </li>
                <li>
                <label className="block">Underlyer</label>
                    <select className="w-full border rounded py-2 px-1 shadow-sm" name="underlyer">
                        {underlyerSymbols.length > 0 && underlyerSymbols.map((symbol, index) => {
                            return <option key={index} value={symbol.id}>{symbol.code}: {symbol.name}</option>
                        })}
                    </select>
                </li>
                <li className="text-right">
                    <button variant="primary">Create</button>
                </li>
            </ul>
        </form>
    </>
}