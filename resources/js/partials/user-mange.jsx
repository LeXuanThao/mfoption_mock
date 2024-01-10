export default function UserManage() {
    return <div className="user-manage border border-gray-300 rounded inline-block p-2 bg-slate-100 round shadow hover:shadow-md transition">
        <div className="header border-b p-2 flex justify-between items-center">
            <h3 className="text-3xl font-medium">User Manage</h3>
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
                            <th className="p-2 bg-blue-200 border border-gray-400">Username</th>
                            <th className="p-2 bg-blue-200 border border-gray-400">Token</th>
                            <th className="p-2 bg-blue-200 border border-gray-400"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td className="p-2 border border-gray-400">1</td>
                            <td className="p-2 border border-gray-400">Toyota</td>
                            <td className="p-2 border border-gray-400">11302bf86573562512d919abb34d44190433e6119f6a0138b953f2088ca30511</td>
                            <td className="p-2 border border-gray-400"></td>
                        </tr>
                        <tr>
                            <td className="p-2 border border-gray-400">2</td>
                            <td className="p-2 border border-gray-400">Yamada</td>
                            <td className="p-2 border border-gray-400">3e755632b2ca69c5bd92627c87ea31efb24b795f1e9ad0ad7fcb624bd6f84fdf</td>
                            <td className="p-2 border border-gray-400"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
}