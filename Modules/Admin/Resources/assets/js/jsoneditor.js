import JsonEditor from 'jsoneditor';
import 'jsoneditor/dist/jsoneditor.css';

// social form submit button 
const socbtn = document.querySelector('.csocbtn');

// Company Social Icons
const socialEditor = document.getElementById("company_social_json");
const Socialoptions = {
    mode: 'code',
    onValidationError: showError(errors)
};
const socialJsoneditor = new JsonEditor(socialEditor, Socialoptions);

const socialIconValue =  document.getElementById('company_social').value;

const json = JSON.parse(socialIconValue);
socialJsoneditor.set(json);

function showError(errors){
    if(errors.length > 0) {
        socbtn.disabled = true;
    } else {
        socbtn.disabled = false;
    }
};


socbtn.addEventListener('click' , function(e) {
    // e.preventDefault();
    document.getElementById('company_social').value = JSON.stringify(socialJsoneditor.get());
    // document.getElementById('company_social').value = socialJsoneditor.get();
    console.log(document.getElementById('company_social').value);
});