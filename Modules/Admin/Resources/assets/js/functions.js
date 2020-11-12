// delete form submission
function d(e){
    e.preventDefault();
    const check = confirm('are you sure?');
    if(check) {
        return true;
    }
    return false;
}