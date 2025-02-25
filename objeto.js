// criando um objeto de aluno
const aluno = {
    nome: "Paiola",
    idade: 17,

    estudar: () => console.log
    (`${aluno.nome} está estudando.`),
};

console.log(aluno.nome);
aluno.estudar();