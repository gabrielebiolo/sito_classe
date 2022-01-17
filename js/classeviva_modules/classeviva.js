const { Classeviva } = require('classeviva.js');

const classeviva = new Classeviva('', '');

    (async () => {
        await classeviva.login();

        classeviva.getGrades()
        .then(grades  => {
            console.log(`Hai un totale di  ${grades.length} voti`);
            console.log(Object.values(grades));
       
        });

        classeviva.getCalendar()
        .then(date => {
            console.log(`Calendario: `);
            console.log(Object.values(date));
       
        });

        classeviva.getNotes()
        .then(note => {
            console.log(Object.values(note));
        });

        classeviva.getSubjects()
        .then(subject => {
            console.log(Object.values(subject));
        });

        setTimeout(() => {
            classeviva.logout();
            process.exit();
        }, 3500);
    })();
