// criando a classe aluno
class aluno{
    #nota
    constructor(nome, idade, nota) {
        // o constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
        this.#nota = nota;
    }
    estudar = () => console.log(`${this.nome} está estudando.`)
    tudo = () => console.log (`A aluna chama ${this.nome} e tem ${this.idade} anos de idade, sua nota foi ${this.#nota}.`)
    verNota = () => this.#nota
}

const paiola = new aluno("Paiola", 17, 90)
console.log(paiola.nome)
console.log(paiola.verNota ());
paiola.tudo();
