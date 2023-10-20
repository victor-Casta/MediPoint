<script>
  import cardPicture from "../../public/assets/hospital.jpg";
</script>
  
<div class="card">
  <div class="card__img">
    <img src={cardPicture.src} alt="">
  </div>
  <div class="card__descr-wrapper">
    <h2 class="card__title">
      center SAS
  </h2>
  <div class="card__descr">
    <h4>Dirección</h4>
    <p>cl 4321</p>
    <h4>Telefono</h4>
    <p>4321</p>
    <h4>Correo</h4>
    <p>sas@correo.com</p>
  </div>
  <div class="card__links">
    <div>
      <a class="link" href="#">Conocer</a>
    </div>
  </div>
  </div>
</div>

<style>
.card {
  --font-color: #323232;
  --bg-color: #e0e0e0;
  width: 250px;
  height: 350px;
  border-radius: 20px;
  background: var(--bg-color);
  box-shadow: -9px 9px 18px #5a5a5a,
              9px -9px 18px #ffffff;
  display: flex;
  height: max-content;
  width: 300px;
  flex-direction: column;
  transition: .4s;
  position: relative;
  margin: 15px 0;
}

.card:hover {
  transform: scale(1.02);
  box-shadow: 0px 0px 10px 2px #5a5a5a;
}

.card__img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 20px 20px 0 0;
  background-color: blueviolet;
}

.card__descr-wrapper {
  padding: 15px;
  display: grid;
}
.card__descr-wrapper h2 {
  font-size: 20px;
  margin: 0;
}

.card__descr-wrapper h4 {
  margin-top: 10px;
  font-weight: 700;
}

.card__title {
  color: var(--font-color);
  text-align: center;
  margin-bottom: 15px;
  font-weight: 900;
  font-size: 16px;
}

.card__descr {
  color: var(--font-color);
}

.card__links {
  margin-top: 10px;
  display: flex;
  justify-content: center;
  align-self: flex-end;
}

.card__links .link {
  color: var(--font-color);
  font-weight: 600;
  font-size: 15px;
  text-decoration: none;
}

.card__links a {
  display: inline-block;
  padding: 10px 40px;
  background-color: #BF8092;
  border-radius: 20px;
  color: #FFF;
  font-weight: 900;
}

.card__links .link:hover {
  text-decoration: underline;
}

</style>
