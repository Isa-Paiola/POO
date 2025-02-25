// criando a classe aluno
class aluno{
    constructor(nome, idade) {
        // o constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
    }
    estudar = () => console.log(`${this.nome} está estudando.`)
    feliz = () =>console.log(`Olá, meu nome é ${this.nome} tenho ${this.idade} anos estou feliz.`)
}

const paiola = new aluno("Paiola", 17)

console.log(paiola.nome)


// novo objeto
const laura = new aluno("Laura", 17)
console.log(laura.nome)
laura.estudar()


// novo objeto com nome e idade
const duda = new aluno("Duda", 16)
console.log(duda.nome)
console.log(duda.idade)


// novo objeto com frase
const ana = new aluno("Ana", 16)
console.log(ana.nome)
console.log(ana.idade)
ana.feliz();

