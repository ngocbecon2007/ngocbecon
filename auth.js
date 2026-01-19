<script>
function register() {
  const u = username.value;
  const p = password.value;
  if(!u || !p) return alert("Nhập đủ thông tin");

  localStorage.setItem("user_"+u, JSON.stringify({password:p, money:0}));
  alert("Đăng ký thành công");
  location.href="login.html";
}

function login() {
  const u = username.value;
  const p = password.value;
  const user = JSON.parse(localStorage.getItem("user_"+u));
  if(!user || user.password !== p) return alert("Sai tài khoản");

  localStorage.setItem("login", u);
  location.href="index.html";
}
</script>
