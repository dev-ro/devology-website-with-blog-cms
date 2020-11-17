window.onload = function(){
    // Select All
    // select all input checkbox
    function dcheck(e) {
        e.preventDefault();
        const check = confirm('are you sure');
        if(check) {
            return true;
        } else {
            return false;
        }
    }

    const selectallcheckbox = document.getElementById('selectall');
    const selectedArrayInputValue = document.getElementById('sendarrayselected');
    selectallcheckbox.addEventListener('click', (e)=>{
        var selected = [];
        const allcheckbox = document.getElementsByName('team_l');
        if(selectallcheckbox.checked === true) {
            for (let index = 0; index < allcheckbox.length; index++) {
               allcheckbox[index].checked = true;
               selected.push(allcheckbox[index].value);
            }
        } else {
            for (let index = 0; index < allcheckbox.length; index++) {
               allcheckbox[index].checked = false;
               selected = [];
            }
        }
        
    });
};