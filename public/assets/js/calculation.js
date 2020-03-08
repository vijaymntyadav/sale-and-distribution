function intToWords(rawValue){
    var num=rawValue,
        a=['','one ','two ','three ','four ', 'five ','six ','seven ','eight ','nine ','ten ','eleven ','twelve ','thirteen ','fourteen ','fifteen ','sixteen ','seventeen ','eighteen ','nineteen '],
        b=['','','twenty','thirty','forty','fifty','sixty','seventy','eighty','ninety'],
        c=['thousand', 'million',''],
        words='';

    num=('000000000'+num.toString()).substr(-9)
        .match(/.{3}/g);

    for(var i=0;i<c.length;i++){
        var n=num[i],
            str='';
        str+=(words!='')?' '+c[c.length-1-i]+' ':'';
        str+=(n[0]!=0)?(a[Number(n[0])]+'hundred '):'';
        n=n.substr(1);
        str+=(n!=0)?((str!='')?'and ':'')+(a[Number(n)]||b[n[0]]+' '+a[n[1]]):'';
        words+=str;
    }
document.getElementById('amount_writing').innerHTML = words + ' only ';
document.getElementById('amount_writing_store').value = words;
}
function totalAmountCalculation(){
    let price_one = document.getElementsByName('total_price_one[]');
    let price_two = document.getElementsByName('total_price_two[]');
    let price_three = document.getElementsByName('total_price_three[]');
    let price_liver = document.getElementsByName('total_price_liver[]');
    let price_one_result = 0;
    let price_two_result = 0;
    let price_three_result = 0;
    let price_liver_result = 0;
    for(var i = 0;i < price_one.length;i++){
        let price_one_convert = price_one[i].value.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
        price_one_result += parseInt(price_one_convert);
    }
    for(var j = 0;j < price_two.length;j++){
        let price_two_convert = price_two[j].value.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
        price_two_result += parseInt(price_two_convert);
    }
    for(var k = 0;k < price_three.length;k++){
        let price_three_convert = price_three[k].value.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
        price_three_result += parseInt(price_three_convert);
    }
    for(var l = 0;l < price_liver.length;l++){
        let price_liver_convert = price_liver[l].value.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
        price_liver_result += parseInt(price_liver_convert);
    }
    let total_amount = price_one_result + price_two_result + price_three_result + price_liver_result;
    document.getElementById('total_amount').value = total_amount;
    intToWords(total_amount);
}
// $(document).on('input','.display_pieces_one',function(){
//     let pieces_one = $(this).data('pieces_one');
//     let total_price_one = $(this).data('total_price_one');
//     let price = document.getElementById($(this).data('display_price_one')).innerHTML.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
//     let pieces = $(this).val().replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
//     let calculation = price * pieces;
//     let total_price = calculation;
//     document.getElementById(pieces_one).value = $(this).val();
//     document.getElementById(total_price_one).value = total_price;
//     document.getElementById($(this).data('display_total_price_one')).innerHTML = '1:' + total_price + '/-';
//     totalAmountCalculation();
// });
// $(document).on('input','.display_pieces_two',function(){
//     let pieces_two = $(this).data('pieces_two');
//     let total_price_two = $(this).data('total_price_two');
//     let price = document.getElementById($(this).data('display_price_two')).innerHTML.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
//     let pieces = $(this).val().replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
//     let calculation = price * pieces;
//     let total_price = calculation;
//     document.getElementById(pieces_two).value = $(this).val();
//     document.getElementById(total_price_two).value = total_price;
//     document.getElementById($(this).data('display_total_price_two')).innerHTML = '2:' + total_price + '/-';
//     totalAmountCalculation();
// });
// $(document).on('input','.display_pieces_three',function(){
//     let pieces_three = $(this).data('pieces_three');
//     let total_price_three = $(this).data('total_price_three');
//     let price = document.getElementById($(this).data('display_price_three')).innerHTML.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
//     let pieces = $(this).val().replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
//     let calculation = price * pieces;
//     let total_price = calculation ;
//     document.getElementById(pieces_three).value = $(this).val();
//     document.getElementById(total_price_three).value = total_price;
//     document.getElementById($(this).data('display_total_price_three')).innerHTML = '3:' + total_price + '/-';
//     totalAmountCalculation();
// });
// $(document).on('input','.display_one_pieces_liver',function(){
//     let pieces_one_liver = $(this).data('pieces_one_liver');
//     let total_price_one_liver = $(this).data('total_price_one_liver');
//     let price = document.getElementById($(this).data('display_one_liver_price')).innerHTML.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
//     let pieces = $(this).val().replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
//     let calculation = price * pieces;
//     let total_price = calculation;
//     document.getElementById(pieces_one_liver).value = $(this).val();
//     document.getElementById(total_price_one_liver).value = total_price;
//     document.getElementById($(this).data('display_total_one_liver_price')).innerHTML = total_price + '/-';
//     totalAmountCalculation();
// });
$(document).on('input','.display_two_pieces_liver',function(){
    let pieces_two_liver = $(this).data('pieces_two_liver');
    let total_price_two_liver = $(this).data('total_price_two_liver');
    let price = document.getElementById($(this).data('display_two_liver_price')).innerHTML.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
    let pieces = $(this).val().replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
    let calculation = price * pieces;
    let total_price = calculation;
    document.getElementById(pieces_two_liver).value = $(this).val();
    document.getElementById(total_price_two_liver).value = total_price;
    document.getElementById($(this).data('display_total_two_liver_price')).innerHTML = total_price + '/-';
    totalAmountCalculation();
});
$(document).on('input','#commission',function(){
    let total_amount = document.getElementById('total_amount').value;
    let total_amount_english = total_amount.replace(/১/g,'1').replace(/২/g,'2').replace(/৩/g,'3').replace(/৪/g, '4').replace(/৫/g,'5').replace(/৬/g,'6').replace(/৭/g,'7').replace(/৮/g,'8').replace(/৯/g,'9').replace(/০/g,'0');
    let commission = document.getElementById('commission');
    let present_calculation = (total_amount_english * commission.value)/100;
    document.getElementById('present_calculation').value = total_amount_english - present_calculation;
});
$(document).on('input','#old_calculation',function(){
    let old_calculation = document.getElementById('old_calculation');
    let present_calculation = document.getElementById('present_calculation');
    let total_due = +present_calculation.value + +old_calculation.value;
    document.getElementById('total_due').value = total_due;
});