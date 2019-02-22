$(document).ready(function () {

    var resumeArray = {
        personalDetailsObj: {
            name: "Ajay Kumar Verma",
            description: "To work in an organization where I can efficiently contribute my analytical &amp; technical skills to the growth of the organization and build my professional career.",
            phone: "+91 9888777192",
            email: "ajay.verma1953@gmail.com",
            skype: "",
            whatsapp: "+91 9888777192",
            location: "Chandigarh",
            dob: "15-08-1992",
            languages_known: ["English", "Hindi"],
            gender: "Male",
            marital_status: "Single"
        },
        interestArr: ["Watching TV Series &amp; Anime", "Reading", "Travelling"],
        technologiesArr: ["Facebook SDK", "Google SDK", "Instagram SDK", "Vuforia SDK", "Google walkthrough", "Tokbox SDK", "Amazon Alexa", "SAAS"],
        trainingArr: [{
                duration: "6 weeks",
                location: "Chandigarh",
                field: "Core Java",
                company: "National Institute of Information Technology (NIIT)"
                    },
            {
                duration: "6 months",
                location: "Bengaluru",
                field: "Android",
                company: "Silicon India"
                    }
                ],
        skillsArr: [{
            label: "Languages Known",
            skill: [{
                name: "Phonegap/Cordova",
                rating: 100
                    }, {
                name: "Ionic",
                rating: 80
                    }, {
                name: "Angular 2+",
                rating: 70
                    }, {
                name: "JavaScript",
                rating: 100
                    }, {
                name: "TypeScript",
                rating: 80
                    }, {
                name: "HTML5",
                rating: 100
                    }, {
                name: "CSS3",
                rating: 100
                    }, {
                name: "Sass",
                rating: 90
                    }, /* {
                name: "NodeJS",
                rating: 50
                    }, */ {
                name: "MongoDB",
                rating: 40
                    }]
                }, {
            label: "Software Tools",
            skill: [{
                name: "Notepad++",
                rating: 100
                    }, {
                name: "Bracket IDE",
                rating: 100
                    }, {
                name: "Sublime Text",
                rating: 50
                    }, {
                name: "Netbeans IDE",
                rating: 70
                    }, {
                name: "Visual Studio Code",
                rating: 70
                    }, {
                name: "Eclipse IDE",
                rating: 80
                    }, {
                name: "Android Studio",
                rating: 60
                    }, {
                name: "Xcode",
                rating: 75
                    }, {
                name: "AutoCad",
                rating: 70
                    }, {
                name: "Photoshop",
                rating: 60
                    }]
                }],
        educationArr: [{
            year: "2015",
            location: "Derabassi",
            university: "Punjab Technical University",
            course: "Bachelor in Technology",
            major: "CSE",
            score: "80.4%"
                }, {
            year: "2011",
            location: "Chandigarh",
            university: "GMSSS, Sector-8",
            course: "Intermediate",
            major: "",
            score: "58.4%"
                }, {
            year: "2009",
            location: "Chandigarh",
            university: "Chandigarh Baptist School",
            course: "High School",
            major: "",
            score: "73.6%"
                }]
    }

    $('#educationId').empty();
    $(resumeArray.educationArr).each(function (i, item) {
        var major = item.major ? '(' + item.major + ')' : '';
        var education = `<li class="list-group-item">
                        <div class="duration"><span>${item.year}</span><span class="r-float">${item.location}</span></div>
                        <div><b>${item.course} ${major}</b><span class="r-float">${item.score}</span></div>
                        <span class="company">${item.university}</span>
                    </li>`;

        $('#educationId').append(education);
    });

    $('#skillsId').empty();
    $(resumeArray.skillsArr).each(function (i, item) {

        var skillsLabel = `<div class="col-xs-12 languages-known">
                <h1 class="skill-title">${item.label}:</h1>
                <div id="label${i}"></div>
                </div>`;

        $('#skillsId').append(skillsLabel);
        $(item.skill).each(function (i2, item2) {
            var skills = `<div class="col-xs-12 padding-null">
                    <div class="col-xs-6 l-padding-null">${item2.name}</div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:${item2.rating}%"></div>
                    </div>
                </div>`;

            $(`#skillsId #label${i}`).append(skills);
        });

    });

    $('#trainingId').empty();
    $(resumeArray.trainingArr).each(function (i, item) {
        var training = `<li class="list-group-item">
                        <div class="duration"><span>${item.duration}</span><span class="r-float">${item.location}</span></div>
                        <div><b>${item.field}</b></div>
                        <span class="company">${item.company}</span>
                    </li>`;

        $('#trainingId').append(training);
    });

    $('#technologiesId').empty();
    $(resumeArray.technologiesArr).each(function (i, item) {
        $('#technologiesId').append('<span>' + item + '</span>');
        if (resumeArray.technologiesArr.length != i + 1) {
            $('#technologiesId').append('<span class="interest"> | </span>');
        }
    });

    $('#interestId').empty();
    $(resumeArray.interestArr).each(function (i, item) {
        $('#interestId').append('<span>' + item + '</span>');
        if (resumeArray.interestArr.length != i + 1) {
            $('#interestId').append('<span class="interest"> | </span>');
        }
    });

    $('#personalDetailsId').empty();
    $('#contactDetailId').empty();
    $(Object.keys(resumeArray.personalDetailsObj)).each(function (i, item) {
        if (item == 'dob') {
            $('#personalDetailsId').append('<div class="personal-detail">Date of Birth: <span class="r-float">' + resumeArray.personalDetailsObj[item] + '</span></div>');
        } else if (item == 'languages_known') {
            $('#personalDetailsId').append('<div class="personal-detail">Languages Known: <span id="languageKnownId" class="r-float"></span></div>');
            $(resumeArray.personalDetailsObj[item]).each(function (i2, item2) {
                $('#languageKnownId').append(item2);
                if (resumeArray.personalDetailsObj[item].length == i2 + 2) {
                    $('#languageKnownId').append(' & ');
                } else if (resumeArray.personalDetailsObj[item].length != i2 + 1) {
                    $('#languageKnownId').append(', ');
                }
            });
        } else if (item == 'gender') {
            $('#personalDetailsId').append('<div class="personal-detail">Gender: <span class="r-float">' + resumeArray.personalDetailsObj[item] + '</span></div>');
        } else if (item == 'marital_status') {
            $('#personalDetailsId').append('<div class="personal-detail">Marital status: <span class="r-float">' + resumeArray.personalDetailsObj[item] + '</span></div>');
        } else if (item == 'name') {
            $('.username').html(resumeArray.personalDetailsObj[item]);
        } else if (item == 'description') {
            $('.description').html(resumeArray.personalDetailsObj[item]);
        } else {

            var faIcon = {
                email: "envelope",
                phone: "phone",
                location: "map-marker",
                whatsapp: "whatsapp",
                skype: "skype",
            };
            var icon = faIcon[item];
            var contact = `<div class="contact-detail col-xs-12 r-padding-null">
                ${resumeArray.personalDetailsObj[item]}<i class="fa fa-${icon}"></i>
            </div>`;

            if (resumeArray.personalDetailsObj[item])
                $('#contactDetailId').append(contact);

        }
    });

});
