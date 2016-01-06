function clicar() {
//   "employees"[
//     {"firstName":"John", "lastName":"Doe"},
//     {"firstName":"Anna", "lastName":"Smith"},
//     {"firstName":"Peter", "lastName":"Jones"}
// ]
//
// var text = '{ "employees" : [' +
// '{ "firstName":"John" , "lastName":"Doe" },' +
// '{ "firstName":"Anna" , "lastName":"Smith" },' +
// '{ "firstName":"Peter" , "lastName":"Jones" } ]}';
//
// var obj = JSON.parse(text);
//   console.log(obj);

var nome = document.getElementById("nome").value;
var idade = document.getElementById("idade").value;
var telefone = document.getElementById("telefone").value;
  // "dados"[
  //   {"nome":nome},
  //   {"idade":idade},
  //   {"telefone":telefone}
  // ]
  //

  var dados = {
    "nome":nome,
    "telefone":telefone,
    "idade":idade
  };
  console.log(dados);
// var text = '{"dados"['+
//   '{"nome":nome},'+
//   '{"idade":idade},'+
//   '{"telefone":telefone}]}';
// console.log(text);
//
// var objDados = JSON.parse(text);
// console.log(objDados);
var json = JSON.parse(dados);

}
