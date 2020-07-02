const express = require('express');
const app = express()

app.get('/api/customers',(req,res)=>{
    const customers = [
        {
            id:1,name:'ibrahim',
            
        },{
            id:2,name:'ali',
            
        },{
            id:3,name:'said',
        }
    ]
    res.send(customers);
});

const PORT = 5000;

app.listen(PORT,()=>console.log(`server listent on port ${PORT}`))