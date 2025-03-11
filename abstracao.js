// Permite criar classes que não podem ser instanciadas diretamente, servindo apenas como MODELO BASE 
// por outras classes. Evitando criação de objetos genéricos.


class Pessoa{
    constructor (nome){
        if(this.constructor === Pessoa){
            throw newError ("Não pode criar este objeto")
        }
        this.nome = nome;
    }
}

class Aluno extends Pessoa{
}
const Isabela = new Aluno ("Isabela")
console.log(Isabela.nome)