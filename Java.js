function DBconnectDelete() {
var ID = document.getElementById("USERID").value;
var mysql = require('mysqli');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "users"  
});  
con.connect(function(err) {  
if (err) throw err;  
var sql = "DELETE FROM info WHERE id = '44'";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("Number of records deleted: " + result.affectedRows);  
});  
});  
}



function GenReport() {
var users = document.getElementById("users").textContent;
var doc = new jsPDF();
doc.setFont("helvetica");
doc.setFontType("bold");
doc.setFontSize(9);
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var img = new Image();
img.src = 'imges/logo.jpeg';
doc.addImage(img, 'png', 50,0);
doc.save("Falcon Report.pdf");
doc.text(20, 50, 'Falcon Cafe');
doc.text(20, 60, 'System users Report');
doc.text(20, 70, date);
doc.text(50, 70, time);
doc.text(20, 80, '-----------------------------------------------------------------------------------------------');
doc.text(20,90 , users.trim());



doc.save('Falcon Report.pdf');

    }

function DBconnect() {
    //put these lines in a seperate file
const mysql = require('mysql2');

const connection = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: "users"
    // here you can set connection limits and so on
});

module.exports = connection;

//put these on destination page


async function getAll() {
    const sql = "SELECT * FROM tableName";
    const [rows] = await connection.promise().query(sql);
    return rows;
} 

res = getAll();

document.write(res);


}