window.addEventListener("load", function (event) {
    if (localStorage.getItem('alunos')) {
        textAreaAlunos.value = localStorage.getItem('alunos')
    }
});

adicionarAluno.addEventListener('click', () => {
    if (adcAluno.value != '') {
        if(textAreaAlunos.value != ''){
            textAreaAlunos.value += '\n'
        }
        textAreaAlunos.value += adcAluno.value + ';'
        adcAluno.value = ''
        localStorage.setItem('alunos', textAreaAlunos.value)
    }
})

limparAlunos.addEventListener('click', () => {
    textAreaAlunos.value = ''
    adcAluno.value = ''
    localStorage.setItem('alunos', '')
})