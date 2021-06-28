function setNewImage(id) {
    let el = document.getElementById(id)
    el.src = el.getAttribute("hover")
}

function setOldImage(id) {
    let el = document.getElementById(id)
    el.src = el.getAttribute("old")
}

function validateForm() {
    var x = document.forms["absen"]["captcha"].value;
    if (x != "w68hp") {
        alert("Masukkan Captcha dengan benar");
        return false;
    } else {
        alert("Sukses absen")
    }
}

function hover(id) {
    let el = document.getElementById(id);
    el.classList.toggle('active');
    // el.style.fill = 'white';
}

function close(id) {
    let el = document.getElementById(id);
    el.style.display = "none";
}

// window.onload = function(){
//     let ele = document.getElementById('close');
//     ele.onclick = function(){
//         cuteHide(this.parentNode);
//         this.parentNode
//         .removeChild(this);
//         return false;
//     };
// };

// function cuteHide(el) {
//     el.animate({opacity: '0'}, 150, function(){
//       el.animate({height: '0px'}, 150, function(){
//         el.remove();
//       });
//     });
//   }

// window.onload = function(){
// const $$card = document.querySelector('.task-group')

// document.querySelector('.close').addEventListener('click', (e) => {
//   $$card.classList.add('removed')

//   $$card.addEventListener('animationend', () => {
//     $$card.classList.add('hide')
//   })
// })
// }

// $$card.addEventListener('pointerdown', () => {
//   let timeout = setTimeout(() => {
//     $$card.classList.add('draggable')
//     $$card.draggable = true;
//   }, 300);


//   document.addEventListener('pointerup', function cardEvent() {
//     clearTimeout(timeout);
//     $$card.classList.remove('draggable');
//     $$card.draggable = false;
//     $$card.removeEventListener('pointerup', cardEvent);
//   })

// })
window.onload = function () {
    var alertEl = document.getElementById('alert');
    var heightEl = alertEl.offsetHeight;
    console.log(heightEl);
    alertEl.style.maxHeight = heightEl + 'px';

    document.getElementById('tutup').addEventListener('click', remove);

    function remove() {
        alertEl.className = 'remove';

        setTimeout(function () {
            console.log('kelar')
            alertEl.style.display = "none";
        }, 650);

    }

}

function search($col) {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[$col];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  // profil user
function klik(){
    document.querySelector('#ava').click();
}

function avadisp(x){
    if(x.files[0]){
        var reader = new FileReader()

        reader.onload = function(x){
            document.querySelector('#avadef').setAttribute('src', x.target.result);
        }
        reader.readAsDataURL(x.files[0]);
    }
}