<div class="screen active" id="screen-login">
    <h1>IFounds - Bem-vindo de volta</h1>
    <p class="subtitle">Faça login para acessar sua conta.</p>

    <div class="card">
      <div class="field">
        <label for="l-email">E-mail</label>
        <input type="email" id="l-email" placeholder="seu@email.com">
        <div class="error-msg" id="err-l-email">Por favor, insira um e-mail válido.</div>
      </div>

      <div class="field">
        <label for="l-password">Senha</label>
        <div class="password-wrapper">
          <input type="password" id="l-password" placeholder="••••••••">
          <button class="toggle-pw" onclick="togglePw('l-password',this)" aria-label="Mostrar senha">
            <svg class="icon-eye" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </button>
        </div>
        <div class="error-msg" id="err-l-password">Preencha a senha.</div>
      </div>

      <div class="remember-row">
        <label class="remember-label">
          <input type="checkbox"> Lembrar de mim
        </label>
        <a href="#" class="forgot">Esqueci a senha</a>
      </div>

      <button class="btn-primary" onclick="doLogin()">Entrar</button>

    </div>

    <p class="footer-link">Não tem uma conta? <a onclick="ir('registro')">Criar conta</a></p>
  </div>