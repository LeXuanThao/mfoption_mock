import { useEffect, useState } from "react";
import api from "../../lib/api";

export default function AdminExchange()
{
    const [exchanges, setExchanges] = useState([]);

    const loadExchanges = async () => {
        let data = await fetch('/api/exchanges');
        data = await data.json();
        setExchanges(data.data);
    }

    useEffect(() => {
        loadExchanges();
    }, []);

    return <>
        <h2>Exchange</h2>
        <ul className="listing">
            {exchanges?.map((exchange, index) => {
                return <li key={index}>
                    <h3>{exchange.code}</h3>
                    <p>{exchange.name}</p>
                </li>
            })}
        </ul>
    </> 
}