const userSetting1 = document.getElementById("usersetting1");
const userSetting2 = document.getElementById("usersetting2");
function functionName()
{
    document.getElementById("usersetting2").classList.toggle('hidden');
}

userSetting1.addEventListener('click', function() {
    document.getElementById("usersetting2").classList.toggle('hidden');
    //userSetting2.classList.toggle('hidden');
 });