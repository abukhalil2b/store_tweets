const express = require('express');
const app = express()

app.get('/api/books',(req,res)=>{
    const customers = [
        {
            id:1,name:'ibrahim',
            
        },{
            id:2,name:'ali',
            
        },{
            id:3,name:'said',
        }
    ]
    return res.status(200).json(customers);
});

const PORT = process.env.PORT || 5000;

app.listen(PORT,()=>console.log(`server listent on port ${PORT}`))