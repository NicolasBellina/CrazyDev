<div class="container right-panel-active">

    <div class="container__form container--signup">
        <form action="{{ route('users.store') }}" method="POST" class="form" id="form1" enctype="multipart/form-data">
            @csrf
            <h2 class="form__title">S'inscrire</h2>
            <label for="nom">Nom<span class="required-field">*</span></label>
            <input type="text" name="last_name" placeholder="Nom" class="input" id="nom" required />
            
            <label for="prenom">Prénom<span class="required-field">*</span></label>
            <input type="text" name="first_name" placeholder="Prénom" class="input" id="prenom" required />
            
            <label for="email">E-mail<span class="required-field">*</span></label>
            <input type="email" name="email" placeholder="Email" class="input" id="email" required />
            
            <label for="password">Mot de passe<span class="required-field">*</span></label>
            <input type="password" name="password" placeholder="Mot de passe (4 caractères minimum)" class="input" id="password" min="4" required />
            
			<h3>Un peu plus à votre sujet...</h3>

            <label for="age">Age<span class="required-field">*</span></label>
            <input type="number" name="age" min="0" class="input" placeholder="Votre âge" id="age" required>


			<div class="optional-info">
				<div>
					<label for="poids">Poids</label>
					<input type="number" name="weight" min="0" class="input" placeholder="Poids en kilos" id="poids">
				</div>

				<div>
					<label for="taille">Taille</label>
					<input type="number" name="height" min="0" class="input" placeholder="Taille en cm" id="taille">
				</div>
				
			</div>


            <label for="langue">Langue<span class="required-field">*</span></label>
            <input type="text" name="language" placeholder="Langue" class="input" id="langue" required />

            <label for="planete">Planète<span class="required-field">*</span></label>
            <input type="text" name="planet" placeholder="Planète" class="input" id="planete" required />
            
            <label for="profile-image">Image de profil</label>
            <input type="file" name="avatar_path" accept="image/*" class="input" id="profile-image">
        
			<div class="required-field-legend"><span class="required-field">*</span> : champ obligatoire</div>
            <button type="submit" class="btn">S'inscrire</button>
        </form>
        
    </div>

    <div class="container__form container--signin"></div>

    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
            </div>
            <div class="overlay__panel overlay--right">
                <button class="btn" id="signUp">S'inscrire</button>
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
	--max-width: 1080px;
	font-size: 16px;
	font-family: 'Space Grotesk', ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
}
body {
	align-items: center;
	background-color: var(--white);
	background: url("img/image de fond 2.png");
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	display: grid;
	place-items: center;
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
  margin-block: 0 1rem; 
  border: 1px solid var(--gray); 
  border-radius: 4px; 
  box-sizing: border-box; 
}

.form__title {
	font-weight: 300;
	margin: 0;
	margin-bottom: 1.25rem;
}

.form__title~h3 {
	font-weight: 300;
	margin-block: 1rem 0;
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
	min-height: 95%;
	max-width: var(--max-width);
	position: relative;
	overflow: hidden;
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
    background-image: url("img/lune.png");	
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
	overflow-y: auto;
}
.input {
	background-color: #fff;
    border: none;
	padding: 0.5rem 0.5rem;
	margin: 0.25rem 0;
	width: 100%;
}

.input#age {
	max-width: 25%;
	align-self: flex-start;
}

.optional-info {
	width: 100%;
	display: flex;
	justify-content: space-between;
}

.required-field {
	color: red;
	font-weight: bold;
	font-size: 90%;
	vertical-align: top;
	margin-left: .2rem;
}

.required-field-legend {
	font-size: 75%;
	font-style: oblique;
	align-self: flex-start;
}