function terminal() {

    let terminals = document.querySelectorAll('.terminal');

    terminals.forEach(el => {
        let command = el.querySelector('.body .command'),
            commandText  = command.textContent;
        let answer = el.querySelector('.body .answer');
        command.textContent = '';
        for (let i = 0; i < commandText.length; i++) {
            (function (i) {
                setTimeout(() => {
                    command.textContent += commandText[i];
                    if(i === commandText.length - 1)
                    {
                       setTimeout(() => {
                           answer.classList.add('ready');
                       }, 1000);
                    }
                }, 75 * i);
            }(i));
        }
    })
}

document.addEventListener("DOMContentLoaded", terminal);

