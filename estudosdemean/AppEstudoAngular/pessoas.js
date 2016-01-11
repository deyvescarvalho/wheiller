angular.module('pessoas',[])

.config(function($routeProvider) {

    $routeProvider
      .when('/', {
        templateUrl: 'listar.html'
      });

})

.controller('CtrlPessoas', function($scope){

  $scope.pessoas = [
    {nome:"Deyves", Cidade:"Jataí"},
    {nome:"Pedo", Cidade:"Salvador"},
    {nome:"Cleber", Cidade:"Jataí"},
    {nome:"Aluis", Cidade:"Jataí"}
  ];


});
