import React, { useState, useEffect } from 'react';
import axios from 'axios';

function App() {
    const [user, setUser] = useState(null);

    useEffect(() => {
        axios.get('/api/user')
            .then(response => {
                setUser(response.data);
            });
    }, []);

    return (
        <div>
            {user ? (
                <div>
                    <h1>{user.name}</h1>
                    <p>{user.email}</p>
                </div>
            ) : (
                <p>Loading...</p>
            )}
        </div>
    );
}

export default App;
