const { Classeviva } = require('classeviva.js');

const classeviva = new Classeviva('G6339209J', 'todeGAY2022!');

    (async () => {
        await classeviva.login();

        classeviva.getGrades()
        .then(grades  => {
            console.log(`Hai un totale di  ${grades.length} voti`);
        });

        classeviva.getCalendar()
        .then(date => {
            console.log(`Calendario: `);
            console.log(Object.prototype.toString.call(date[0]));
        });

        classeviva.getNotes()
        .then(note => {
            console.log(`Notes: ${note}`);
        });

        classeviva.getSubjects()
        .then(subject => {
            console.log(`Sub:: ${subject}`);
        });

        setTimeout(() => {1
            classeviva.logout();
            process.exit();
        }, 3500);
    })();
