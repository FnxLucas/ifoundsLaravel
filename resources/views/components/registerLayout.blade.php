<div class="screen" id="screen-registro">
    <h1>Criar conta</h1>
    <p class="subtitle">Preencha os dados abaixo para começar.</p>

    <div class="card">
      <div class="row-2">
        <div class="field">
          <label for="r-fname">Nome</label>
          <input type="text" id="r-fname" placeholder="João">
          <div class="error-msg" id="err-r-fname">Campo obrigatório.</div>
        </div>
        <div class="field">
          <label for="r-lname">Sobrenome</label>
          <input type="text" id="r-lname" placeholder="Silva">
          <div class="error-msg" id="err-r-lname">Campo obrigatório.</div>
        </div>
      </div>

      <div class="field">
        <label for="r-email">E-mail</label>
        <input type="email" id="r-email" placeholder="seu@email.com">
        <div class="error-msg" id="err-r-email">Por favor, insira um e-mail válido.</div>
      </div>

      <div class="field">
        <label for="r-password">Senha</label>
        <div class="password-wrapper">
          <input type="password" id="r-password" placeholder="Mínimo 8 caracteres" oninput="checkStrength(this.value)">
          <button class="toggle-pw" onclick="togglePw('r-password',this)" aria-label="Mostrar senha">
            <svg class="icon-eye" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </button>
        </div>
        <div class="strength-bar">
          <span id="s1"></span><span id="s2"></span><span id="s3"></span><span id="s4"></span>
        </div>
        <div class="strength-label" id="strength-label"></div>
        <div class="error-msg" id="err-r-password">A senha deve ter no mínimo 8 caracteres.</div>
      </div>

      <div class="field">
        <label for="r-confirm">Confirmar senha</label>
        <div class="password-wrapper">
          <input type="password" id="r-confirm" placeholder="Repita a senha">
          <button class="toggle-pw" onclick="togglePw('r-confirm',this)" aria-label="Mostrar senha">
            <svg class="icon-eye" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </button>
        </div>
        <div class="error-msg" id="err-r-confirm">As senhas não coincidem.</div>
      </div>

      <div class="terms-row">
        <input type="checkbox" id="r-terms">
        <label for="r-terms">Ao criar uma conta, concordo com os <a href="#">Termos de Uso</a> e a <a href="#">Política de Privacidade</a>.</label>
      </div>
      <div class="error-msg" id="err-r-terms" style="margin-top:-10px;margin-bottom:10px;">Você deve aceitar os termos.</div>

      <button class="btn-primary" onclick="doSignup()">Criar conta</button>

    </div>

    <p class="footer-link">Já tem uma conta? <a onclick="ir('login')">Fazer login</a></p>
  </div>