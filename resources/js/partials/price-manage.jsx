import { useState } from "react"

export default function PriceManage() {
    const [currentPrice, setCurrentPrice] = useState(100)
    const [price, setPrice] = useState(0)

    return <div className="pricing-manage border border-gray-300 rounded inline-block p-2 bg-slate-100 round shadow hover:shadow-md transition">
        <h3 className="text-3xl font-medium border-b border-gray-300 p-2">Price Manage</h3>
        <div className="py-2 text-bold">Current Price: <span className="font-bold text-xl">{ currentPrice }¥</span> </div>
        <div className="flex gap-2">
            <input type="text" className="bg-gray-200 p-2 rounded" name="price" value={ price } onChange={(e) => setPrice(e.target.value)} />
            <button type="button" className="bg-blue-500 text-white rounded p-2 px-4" onClick={() => setCurrentPrice(price)}>Change</button>
        </div>
    </div>
}