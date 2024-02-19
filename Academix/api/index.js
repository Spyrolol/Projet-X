var Express = require("express");
var MongoClient = require("mongodb").MongoClient;
var cors = require("cors");

var app = Express();
app.use(cors());

var CONNECTION_STRING = "mongodb+srv://admin:xcM7lUy6Wg4pVYCh@cluster0.i4xwoko.mongodb.net/?retryWrites=true&w=majority";
var DATABASE_NAME = "todoappdb";
var database;

app.listen(5038, () => {
    MongoClient.connect(CONNECTION_STRING, (error, client) => {
        if (error) {
            console.error("MongoDB connection error:", error);
        } else {
            database = client.db(DATABASE_NAME);
            console.log("MongoDB connection successful");
        }
    });
});

app.get('/api/todoapp/GetNotes', (request, response) => {
    database.collection("todoappcollection").find({}).toArray((error, result) => {
        if (error) {
            console.error("Error fetching notes:", error);
            response.status(500).send("Error fetching notes");
        } else {
            response.send(result);
        }
    });
});


app.post('/api/todoapp/AddNotes',multer().none,(request,response)=>{

database.collection("todoappcollection").count({},function(error,numOfDocs){
    database.collection("todoappcollection").insertOne({
        id:(numOfDocs+1).toString(),
        description:request.body.newNotes
    });
    response.json("Ajouter avec succes");
})
})

app.delete('/api/todoapp/DeleteNotes',(request,response)=>{
database.collection("todoappcollection").deleteOne({
    id:request.query.id
});
response.json("SUprimer avec succes mdr de ...");
})