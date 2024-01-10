export default function SymbolManage() {
    return <div className="symbol-manage border border-gray-300 rounded inline-block p-2 bg-slate-100 shadow hover:shadow-md transition">
        <div className="header border-b p-2 flex justify-between items-center">
            <h3 className="text-3xl font-medium">Symbol Manage</h3>
            <div className="button-group">
                <button type="button" className="bg-blue-500 text-white rounded p-2 px-4">+</button>
            </div>
        </div>
        <div className="table-group">
            <table className="table-auto border-collapse w-full">
                <thead>
                    <tr>
                        <th className="p-2 bg-blue-200 border border-gray-400">Code</th>
                        <th className="p-2 bg-blue-200 border border-gray-400">Name</th>
                        <th className="p-2 bg-blue-200 border border-gray-400">Type</th>
                        <th className="p-2 bg-blue-200 border border-gray-400">Expies</th>
                        <th className="p-2 bg-blue-200 border border-gray-400">Base</th>
                        <th className="p-2 bg-blue-200 border border-gray-400"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td className="p-2 border border-gray-400">NIKKEI</td>
                        <td className="p-2 border border-gray-400">Nikkei 225</td>
                        <td className="p-2 border border-gray-400">Index</td>
                        <td className="p-2 border border-gray-400">-</td>
                        <td className="p-2 border border-gray-400">-</td>
                        <td className="p-2 border border-gray-400"></td>
                    </tr>
                    <tr>
                        <td className="p-2 border border-gray-400">NI25E20240131</td>
                        <td className="p-2 border border-gray-400">Nikkei 225 Option - Exp 2024/01/31</td>
                        <td className="p-2 border border-gray-400">Option</td>
                        <td className="p-2 border border-gray-400">2024-01-31</td>
                        <td className="p-2 border border-gray-400">NIKKEI</td>
                        <td className="p-2 border border-gray-400"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
}