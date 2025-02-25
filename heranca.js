// criar classe Pessoa
// Com patametros Nome e Idade

class pessoa{
    constructor(nome, idade) {
        // o constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
    }
    apresentar= () =>console.log (`Olá, sou ${this.nome} e tenho ${this.idade} anos.`)
}

class  Aluno extends pessoa{
    estudar = () =>console.log(`${this.nome} está estudando.`);
}

class professor extends pessoa{
    ensinar = () =>console.log(`Professor ${this.nome} está ensinando.`)
}

// criando objetos 
const paiola = new Aluno("Paiola", 17);
const raul = new professor ("Raul", 28);
paiola.apresentar();
raul.apresentar();
paiola.estudar();
raul.ensinar();