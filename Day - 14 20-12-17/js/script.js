// var headingElement = document.getElementById('headingOne');
//  headingElement.onclick = function () {
//      headingElement.style.color = 'red';
//  }
// // $('#headingOne').click(function () {
// //     $('#headingOne').css({
// //         'color' : 'red',
// //         'font-size' : '120px',
// //         'background-color' : 'black'
// //     })
// //
// // });
//
// $('#submit').click(function () {
//     var firstName = $('#firstName').val();
//     var lastName = $('#lastName').val();
//     var fullName = firstName + ' ' + lastName;
//     $('#fullName').val(fullName)
//     // $("#fullName").val(firstName+' '+lastName);
// })
// //////////////////////////////////////////////////////////////////////////
// $('#img1').click(function () {
//     var imageUrl = $('#img1').attr("src")
//     $('#mainImage').attr('src', imageUrl)
// });
// $('#img2').click(function () {
//     var imageUrl = $('#img2').attr("src")
//     $('#mainImage').attr('src', imageUrl)
// });
// $('#img3').click(function () {
//     var imageUrl = $('#img3').attr("src")
//     $('#mainImage').attr('src', imageUrl)
// });
// $('#img4').click(function () {
//     var imageUrl = $('#img4').attr("src")
//     $('#mainImage').attr('src', imageUrl)
// });
// $('#img5').click(function () {
//     var imageUrl = $('#img5').attr("src")
//     $('#mainImage').attr('src', imageUrl)
// });
// $('#img6').click(function () {
//     var imageUrl = $('#img6').attr("src")
//     $('#mainImage').attr('src', imageUrl)
// });
// $('#img7').click(function () {
//     var imageUrl = $('#img7').attr("src")
//     $('#mainImage').attr('src', imageUrl)
// });
///.//////////////////////////////////////////////////////////////////////////////////////////////////
$('#firstName').keyup(function () {
    var firstNameValue = $('#firstName').val();
    if(firstNameValue.length > 6 && firstNameValue.length < 15) {
        $('#firstNameError').text(' ');
    } else {
        $('#firstNameError').text('First name should be 6 to 15 caracter');
    }

});
$('#myForm').submit(function () {
    return true
})