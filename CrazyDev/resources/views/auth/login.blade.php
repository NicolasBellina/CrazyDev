

<div class="container right-panel-active">

    <div class="container__form container--signup">

        <form action="{{ route('login') }}" method="POST" class="form" id="form1">
            @csrf
            <h2 class="form__title">Se connecter</h2>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Email" class="input" required />
            
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" class="input" required />
            
            <button type="submit" class="btn">Se connecter</button>
        </form>

    </div>


    <div class="container__form container--signin"></div>

    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
            </div>
            <div class="overlay__panel overlay--right">
                <button class="btn" id="signUp">Se connecter</button>
            </div>
        </div>
    </div>
</div>

<style> 


:root {
	--white: #e9e9e9;
	--gray: #333;
	--blue: #0367a6;
	--lightblue: #008997;
	--button-radius: 0.7rem;
	--max-width: 758px;
	--max-height: 500px;
	font-size: 16px;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
body {
	align-items: center;
	background-color: var(--white);
	background: url("img/avatar/image de fond 2.png");
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	display: grid;
	height: 100vh;
	place-items: center;
	overflow: hidden;
}

.form label {
  display: block;
  text-align: left;
  width: 100%;
  font-size: 0.875rem; 
  color: var(--gray);
  font-weight: bold; 
}

.input {
  display: block;
  width: 100%;
  padding: 0.5rem 0.75rem; 
  margin-bottom: 1rem; 
  border: 1px solid var(--gray); 
  border-radius: 4px; 
  box-sizing: border-box; 
}



.form__title {
	font-weight: 300;
	margin: 0;
	margin-bottom: 1.25rem;
}
.link {
	color: var(--gray);
	font-size: 0.9rem;
	margin: 1.5rem 0;
	text-decoration: none;
}
.container {
	background-color: var(--white);
	border-radius: var(--button-radius);
	box-shadow: 0 0.9rem 1.7rem rgba(0, 0, 0, 0.25), 0 0.7rem 0.7rem rgba(0, 0, 0, 0.22);
	height: var(--max-height);
	max-width: var(--max-width);
	overflow: hidden;
	position: relative;
	width: 100%;
}
.container__form {
	height: 100%;
	position: absolute;
	top: 0;
}


.container--signup {
	left: 0;
	opacity: 0;
	width: 50%;
	z-index: 1;
}
.container.right-panel-active .container--signup {
	animation: show 0.6s;
	opacity: 1;
	transform: translateX(100%);
	z-index: 5;
}
.container__overlay {
	height: 100%;
	left: 50%;
	overflow: hidden;
	position: absolute;
	top: 0;
	width: 50%;
	z-index: 100;
}
.container.right-panel-active .container__overlay {
	transform: translateX(-100%);
}
.overlay {
	background-color: var(--lightblue);
    background-image: url("img/avatar/lune.png");	
    background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	height: 100%;
	left: -100%;
	position: relative;
	transform: translateX(0);
	width: 200%;
}
.container.right-panel-active .overlay {
	transform: translateX(50%);
}
.overlay__panel {
	align-items: center;
	display: flex;
	flex-direction: column;
	height: 100%;
	justify-content: center;
	position: absolute;
	text-align: center;
	top: 0;

	width: 50%;
}
.overlay--left {
	transform: translateX(-20%);
}
.container.right-panel-active .overlay--left {
	transform: translateX(0);
}
.overlay--right {
	right: 0;
	transform: translateX(0);
}
.container.right-panel-active .overlay--right {
	transform: translateX(20%);
}
.btn {
	background-color: var(--blue);
	background-image: linear-gradient(90deg, var(--blue) 0%, var(--lightblue) 74%);
	border-radius: 20px;
	border: 1px solid var(--blue);
	color: var(--white);
	cursor: pointer;
	font-size: 0.8rem;
	font-weight: bold;
	letter-spacing: 0.1rem;
	padding: 0.9rem 4rem;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
.form>.btn {
	margin-top: 1.5rem;
}

.btn:focus {
	outline: none;
}
.form {
	background-color: var(--white);
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 3rem;
	height: 100%;
	text-align: center;
}
.input {
	background-color: #fff;
    border: none;
	padding: 0.5rem 0.5rem;
	margin: 0.5rem 0;
	width: 100%;
}
