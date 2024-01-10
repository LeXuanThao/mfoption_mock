import { PencilSquareIcon, TrashIcon, DocumentIcon } from '@heroicons/react/16/solid'

export default function AdminUser()
{
    let users = [
        {id: 1, name: 'user1', email: 'user1@example.com'},
        {id: 2, name: 'user2', email: 'user2@example.com'},
        {id: 3, name: 'user3', email: 'user3@example.com'}
    ];

    return <>
        <h2>Users</h2>
        <div className="mb-2">
            <button variant="primary">Add User</button>
        </div>
        <ul className="listing mb-3">
            {users.map((user, index) => {
                return <li key={index}>
                    <h3>{user.name}</h3>
                    <PencilSquareIcon className='size-4' />
                    <TrashIcon className='size-4' />
                    <DocumentIcon className='size-4' />
                    <p>{user.email}</p>
                </li>
            })}
        </ul>

        <h2>Create User</h2>
        <ul className="form">
            <li>
                <label className="block">Name</label>
                <input className="w-full border rounded py-1 px-2 shadow-sm" type="text" />
            </li>
            <li>
                <label className="block">Email</label>
                <input className="w-full border rounded py-1 px-2 shadow-sm" type="text" />
            </li>
            <li>
                <label className="block">Password</label>
                <input className="w-full border rounded py-1 px-2 shadow-sm" type="password" />
            </li>
            <li>
                <label className="block">Confirm Password</label>
                <input className="w-full border rounded py-1 px-2 shadow-sm" type="password" />
            </li>
            <li className="text-right">
                <button variant="primary">Create</button>
            </li>
        </ul>
    </>
}