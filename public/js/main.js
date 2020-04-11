const responseForm = document.querySelector('.response-form');
const responseArea = document.querySelector('.response');
const choicesArea = document.querySelector('.choices');
const inputBlock = document.querySelector('.input-block');
const responseText = document.querySelector('#response_text');
const responseId = document.querySelector('#response_id');
const messageArea = document.querySelector('#messageArea');
const chat = document.querySelector('#chat');
const userForm = document.querySelector('#userForm');
const userArea = document.querySelector('#userArea');
const nome = document.querySelector('#nome');
const email = document.querySelector('#email');
const telefone = document.querySelector('#telefone');
const choicesWrapper = document.querySelector('.choices-wrapper')
const helper = {
    momentoContato: '',
    meioContato: '',
    editarCampo:''
}
let typed = ''
const response = []

window.onload = function() {
    userForm.onsubmit = userSubmit
    document.querySelector('body').onclick = bindBtnsChoice
    responseForm.onsubmit = userResponse
}

function userResponse() {
    const contexto = responseText.getAttribute('data-contexto')
    const options = {
        momento: responseId.getAttribute('data-momento'),
        valor: responseText.value,
        contexto
    }
    document.querySelector(`#${contexto}`).value = responseText.value
    response.push(options)
    chat.innerHTML += `<div class="well col-xs-10 col-sm-10 col-md-9 float-r">${responseText.value}</div>`
    responseText.value = ''
    responseArea.classList.remove('appear')
    botResponse(responseId.value)
    return false
}

function bindBtnsChoice() {
    const element = event.target
    if(element.classList.contains('btn-choice')) {
        const options = {
            momento: element.getAttribute('data-momento'),
            valor: element.textContent
        }
        response.push(options)
        chat.innerHTML += `<div class="well col-xs-10 col-sm-10 col-md-5 float-r">${element.textContent}</div>`
        responseArea.classList.remove('appear')
        if(element.getAttribute('data-momentoContato') != undefined) {
            helper.momentoContato = element.getAttribute('data-momentoContato')
        }
        if(element.getAttribute('data-meioContato') != undefined) {
            helper.meioContato = element.getAttribute('data-meioContato')
        }
        if(element.getAttribute('data-editarCampo') != undefined) {
            helper.editarCampo = element.getAttribute('data-editarCampo')
        }
        botResponse(element.getAttribute('data-id'))
        
        enviaDados(response);
    }
}

function userSubmit() {
    userArea.classList.add('hide')
    setTimeout(function() {
        userArea.style.display = 'none'
        messageArea.classList.add('appear')
        const options = [
            {id: 1, apoio: '', text: 'Podemos continuar?', momento: 'Como posso lhe ajudar?'},
            {id: 2, apoio: '', text: 'Agora não posso', momento: 'Como posso lhe ajudar?'},
            {id: 3, apoio: '', text: 'Não, Obrigado', momento: 'Como posso lhe ajudar?'}
        ]
        resetTyped(
            "#typed",
            [`Olá ${nome.value} tudo bem?<br>Eu sou a Inteligência3. ^500 Meu papel é entender a sua necessidade e auxiliar.<br>Preciso de no máximo 03 minutos do seu tempo, e não se preocupe, é seguro compartilhar suas informações comigo.`],
            options
        )
    },500)

    return false
}

function mountUserChoices(arr, inputObj = null) {
    choicesWrapper.innerHTML = ''
    inputBlock.classList.remove('appear')
    if(inputObj != null) {
        responseId.value = inputObj.id
        responseId.setAttribute('data-momento', inputObj.momento)
        inputBlock.classList.add('appear')
        responseText.setAttribute('data-contexto', helper.editarCampo)
    } else {
        arr.forEach(obj => {
            if(obj.apoio == 'momentoContato') {
                choicesWrapper.innerHTML += `<button data-momentoContato='${obj.momentoContato}' data-id='${obj.id}' data-momento='${obj.momento}' class='btn btn-primary btn-choice'>${obj.text}</button>`
            }
            if(obj.apoio == 'meioContato') {
                choicesWrapper.innerHTML += `<button data-meioContato='${obj.meioContato}' data-id='${obj.id}' data-momento='${obj.momento}' class='btn btn-primary btn-choice'>${obj.text}</button>`
            }
            if(obj.apoio == 'editarCampo') {
                choicesWrapper.innerHTML += `<button data-editarCampo='${obj.editarCampo}' data-id='${obj.id}' data-momento='${obj.momento}' class='btn btn-primary btn-choice'>${obj.text}</button>`
            }
            if(obj.apoio == '') {
                choicesWrapper.innerHTML += `<button data-id='${obj.id}' data-momento='${obj.momento}' class='btn btn-primary btn-choice'>${obj.text}</button>`
            }
        })
        choicesArea.classList.add('appear')
    }
    responseArea.classList.add('appear')
    document.body.scrollIntoView(false)
}

function resetTyped(id, strings, options, inputObj = null) {
    typed = new Typed(id, {
        strings,
        typeSpeed: 1,
        onComplete: function() {
            if(inputObj != null) {
                console.log(options);
                mountUserChoices(options, inputObj)
            } else {
                mountUserChoices(options)
            }
        },
        onStringTyped: function() {
            document.body.scrollIntoView(false)
        }
    });
}

function botResponse(i) {
    chat.innerHTML += `<div id='typed-${i}' class="well col-xs-10 col-sm-10 col-md-9"></div>`
    if(i == 1) {
        const options = [
            {id: 4, apoio: 'meioContato', meioContato: 'email', text: 'Email', momento: 'Como você gostaria de ser contatado?'},
            {id: 5, apoio: 'meioContato', meioContato: 'telefone', text: 'Telefone', momento: 'Como você gostaria de ser contatado?'},
            {id: 6, apoio: 'meioContato', meioContato: 'whatsApp', text: 'WhatsApp', momento: 'Como você gostaria de ser contatado?'}
        ]
        resetTyped(
            `#typed-${i}`,
            [`Ok, Então vamos lá.<br>Vou encaminhar a sua solicitação para a área responsável.<br>Como você gostaria de ser contatado?<br>Email, Telefone ou WhatsApp`],
            options
         )
    }
    if(i == 2) {

    }
    if(i == 2) {
        const options = [
            {id: 4, apoio: 'meioContato', meioContato: 'email', text: 'Email', momento: 'Como você gostaria de ser contatado?'},
            {id: 5, apoio: 'meioContato', meioContato: 'telefone', text: 'Telefone', momento: 'Como você gostaria de ser contatado?'},
            {id: 6, apoio: 'meioContato', meioContato: 'whatsApp', text: 'WhatsApp', momento: 'Como você gostaria de ser contatado?'}
        ]
        resetTyped(
            `#typed-${i}`,
            [`Entendi.<br>Vou encaminhar a sua solicitação para a área responsável.<br>Como você gostaria de ser contatado?<br>Email, Telefone ou WhatsApp`],
            options
         )
    }
    if(i == 4 || i == 5 || i == 6) {
        const options = [
            {id: 7, apoio: 'momentoContato', momentoContato: 'Vamos falar com você pela manhã', text: 'Manhã', momento: 'Em qual período do dia você gostaria de ser contatado?'},
            {id: 8, apoio: 'momentoContato', momentoContato: 'Vamos falar com você pela tarde', text: 'Tarde', momento: 'Em qual período do dia você gostaria de ser contatado?'},
            {id: 9, apoio: 'momentoContato', momentoContato: 'Vamos falar com você de noite', text: 'Noite', momento: 'Em qual período do dia você gostaria de ser contatado?'},
            {id: 10, apoio: 'momentoContato', momentoContato: 'OK', text: 'Qualquer horário', momento: 'Em qual período do dia você gostaria de ser contatado?'}
        ]
        resetTyped(
            `#typed-${i}`,
            [`Ok, entraremos em contato por ${helper.meioContato}.<br> Em qual período do dia você gostaria de ser contatado?`],
            options
         )
    }
    if(i == 7 || i == 8 || i == 9 || i == 10) {
        const options = [
            {id: 11, apoio: '', text: 'Sim', momento: 'Posso confirmar o contato para amanhã?'},
            {id: 12, apoio: '', text: 'Não', momento: 'Posso confirmar o contato para amanhã?'}
        ]
        resetTyped(
            `#typed-${i}`,
            [`${helper.momentoContato}.<br>Esses são seus dados:<br>Nome: ${nome.value}<br>E-mail: ${email.value}<br>Telefone: ${telefone.value}<br>Posso confirmar?`],
            options
         )
    }
    if(i == 11) {

    }
    if(i == 12) {
        const options = [
            {id: 13, apoio: 'editarCampo', editarCampo: 'nome', text: 'Editar Nome', momento: 'O que você gostaria de editar?'},
            {id: 14, apoio: 'editarCampo', editarCampo: 'email', text: 'Editar Email', momento: 'O que você gostaria de editar?'},
            {id: 15, apoio: 'editarCampo', editarCampo: 'telefone', text: 'Editar Telefone', momento: 'O que você gostaria de editar?'},
        ]
        resetTyped(
            `#typed-${i}`,
            [`Ok, o que você gostaria de editar?`],
            options
         )
    }
    if(i == 13 || i == 14 || i == 15) {
        resetTyped(
            `#typed-${i}`,
            [`Ok, qual é o seu ${helper.editarCampo}?`],
            [],
            {id: 16, momento: 'O que você gostaria de editar?'}
         )
    }
    if(i == 16) {
        const options = [
            {id: 11, apoio: '', text: 'Sim', momento: 'Posso confirmar o contato para amanhã?'},
            {id: 12, apoio: '', text: 'Não', momento: 'Posso confirmar o contato para amanhã?'}
        ]
        const newData = `Seu novo ${helper.editarCampo} é ${document.querySelector(`#${helper.editarCampo}`).value}`
        resetTyped(
            `#typed-${i}`,
            [`${newData}.<br>Esses são seus dados:<br>Nome: ${nome.value}<br>E-mail: ${email.value}<br>Telefone: ${telefone.value}<br>Posso confirmar?`],
            options
         )
    }
    
    document.body.scrollIntoView(false)
}

function enviaDados(i, momento){
    
   
    console.log(response);
}
