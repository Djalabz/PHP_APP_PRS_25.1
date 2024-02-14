<?php 

$studentsSqy = [
    'ABOUZAID Ismail',
    'BEN ABDESSELEM Adem',
    'BONTROND Yanis',
    'BOUSSEIRI Dalil',
    'CORREA Patterson',
    'DALI Zouayobo',
    'DE ALMEIDA Thomas',
    'DEROUALLE Enzo',
    'HAUSER Timothée',
    'HETE Audric',
    'MEHALEBI Milane',
    'MOKHTARI Kahil',
    'MOUMOU Abdelhadi',
    'MUDRYK JARDIN Théo',
    'PAVESIS Lucas'
];

$studentsPrs = [
    'ADAM Carter',
    'ANNASSAMY Marc',
    'ATIENZA Julian',
    'BEN MAHFOUDH Chaïma',
    'BLOCTEUR Arthur',
    'BOILEAU Maxim',
    // 'DEVOUCHE Zacharie',
    'DUNCA Denis',
    'ESSONGHE Alex',
    'FDHIL Elyea',
    'GHEZALI Camelia',
    'HASSANI Ayoub',
    // 'KABA Ibrahima',
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

function randomStudent($students) {
    $randomIndex1 = rand(0, count($students) - 1);
    $randomIndex2 = rand(0, count($students) - 1);

    if ($randomIndex1 === $randomIndex2 && $randomIndex1 > 0) {
        $randomIndex2 = $randomIndex1 - 1;
    } else {
        $randomIndex2 = $randomIndex1 + 1;
    }

    $student1 = $students[$randomIndex1];
    $student2 = $students[$randomIndex2];

    // return "$student1 et $student2 présenteront la prochaine veille";
    return "$student1";
}

echo randomStudent($studentsSqy);