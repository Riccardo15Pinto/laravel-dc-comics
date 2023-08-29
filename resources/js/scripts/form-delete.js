const deleteForm = document.querySelectorAll('.delete-form');

deleteForm.forEach( form => {
form.addEventListener('submit' , e => {
    e.preventDefault();
    const comicName = form.dataset.name;
    const isConfirmed = confirm(`Sei sicuro di voler eliminare ${comicName}`);
    if(isConfirmed) form.submit();
})
})