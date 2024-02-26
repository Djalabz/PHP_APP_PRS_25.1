
const prs = [
    'ADAM Carter',
    'ANNASSAMY Marc',
    'ATIENZA Julian',
    'BEN MAHFOUDH Chaïma',
    'BLOCTEUR Arthur',
    'BOILEAU Maxim',
    'DEVOUCHE Zacharie',
    'DUNCA Denis',
    'ESSONGHE Alex',
    'FDHIL Elyea',
    'GHEZALI Camelia',
    'HASSANI Ayoub',
    'KABA Ibrahima',
    'KHIF Sara',
    'LALANNE Samuel',
    'MABICKASSA BOUSSOUGOU Serge-Daryl',
    'MARTIN Gabriel',
    'OTABELA Juan Miguel',
    'RICHER Benjamin',
    'SOGLO Helsy Aubierge',
    'TARCHOUN Rayan',
    'THABTHIM Kevin',
    'TROUVE Rhys',
    'YAKOU Franckamour',
];

function randomStudent(array) {
    const index = Math.random(array.length - 1)

    console.log(array[index])
}


setInterval(randomStudent(prs), 1000)

