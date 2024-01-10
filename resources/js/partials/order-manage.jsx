export default function OrderManage() {
    return <div className="order-manage border border-gray-300 rounded inline-block p-2 bg-slate-100 round shadow hover:shadow-md transition">
        <div className="header border-b p-2 flex justify-between items-center">
            <h3 className="text-3xl font-medium">Order Manage</h3>
            <div className="button-group">
                <button type="button" className="bg-blue-500 text-white rounded p-2 px-4">+</button>
            </div>
        </div>
        <div className="body">
            <div className="table-group">
                <table className="table-auto border-collapse w-full">
                    <thead>
                        <tr>
                            <th className="p-2 bg-blue-200 border border-gray-400">#</th>
                            <th className="p-2 bg-blue-200 border border-gray-400">Symbol</th>
                            <th className="p-2 bg-blue-200 border border-gray-400">User</th>
                            <th className="p-2 bg-blue-200 border border-gray-400">Price</th>
                            <th className="p-2 bg-blue-200 border border-gray-400">Quantity</th>
                            <th className="p-2 bg-blue-200 border border-gray-400">Created At</th>
                            <th className="p-2 bg-blue-200 border border-gray-400"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td className="p-2 border border-gray-400">1</td>
                            <td className="p-2 border border-gray-400">1</td>
                            <td className="p-2 border border-gray-400">NIKKEI</td>
                            <td className="p-2 border border-gray-400">117</td>
                            <td className="p-2 border border-gray-400">100</td>
                            <td className="p-2 border border-gray-400">2024-01-01 00:10:10</td>
                            <td className="p-2 border border-gray-400"></td>
                        </tr>
                        <tr>
                            <td className="p-2 border border-gray-400">1</td>
                            <td className="p-2 border border-gray-400">2</td>
                            <td className="p-2 border border-gray-400">NIKKEI</td>
                            <td className="p-2 border border-gray-400">117</td>
                            <td className="p-2 border border-gray-400">100</td>
                            <td className="p-2 border border-gray-400">2024-01-01 00:10:10</td>
                            <td className="p-2 border border-gray-400"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
}