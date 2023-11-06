document.write("■■■問1■■■")
document.write("<br>");
document.write("<br>");

function menseki(hankei){
    return hankei*hankei*3.14+"㎠です。";
}
document.write("半径が5㎝の円の面積は"+menseki(5));
document.write("<br>");
document.write("半径が7㎝の円の面積は"+menseki(7));
document.write("<br>");
document.write("半径が10㎝の円の面積は"+menseki(10));
document.write("<br>");

document.write("<br>");
document.write("<br>");
document.write("■■■問2■■■")
document.write("<br>");
document.write("<br>");

function ryokin(otona,kodomo){
    return (otona*500)+(kodomo*200);
}
function ryokin_hyoji(gr,otona,kodomo){
    return gr+"グループの合計金額は"+ryokin(otona,kodomo)+"円です。"+"<br>";
}
document.write("Aグループの合計金額は"+ryokin(2,4)+"円です。"+"<br>");
document.write("Bグループの合計金額は"+ryokin(1,5)+"円です。"+"<br>");
document.write("Cグループの合計金額は"+ryokin(3,7)+"円です。"+"<br>");
document.write(ryokin_hyoji("D",100,1000));
