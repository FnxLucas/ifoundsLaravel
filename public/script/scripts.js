/* ── Navegação ── */
  function ir(tela) {
    document.querySelectorAll('.screen').forEach(function(s) {
      s.classList.remove('active');
    });
    document.getElementById('screen-' + tela).classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  /* ── Mostrar/ocultar senha ── */
  var eyeOpen = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>';
  var eyeOff  = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/></svg>';

  function togglePw(id, btn) {
    var input = document.getElementById(id);
    var showing = input.type === 'text';
    input.type = showing ? 'password' : 'text';
    btn.innerHTML = showing ? eyeOpen : eyeOff;
  }

  /* ── Força da senha ── */
  function checkStrength(pw) {
    var bars = ['s1','s2','s3','s4'].map(function(id){ return document.getElementById(id); });
    var lbl = document.getElementById('strength-label');
    bars.forEach(function(b){ b.className = ''; });
    lbl.className = 'strength-label';
    if (!pw) { lbl.textContent = ''; return; }
    var score = 0;
    if (pw.length >= 8) score++;
    if (/[A-Z]/.test(pw)) score++;
    if (/[0-9]/.test(pw)) score++;
    if (/[^A-Za-z0-9]/.test(pw)) score++;
    var lvl = score <= 1 ? 'weak' : score <= 2 ? 'medium' : 'strong';
    var labels = { weak: 'Fraca', medium: 'Média', strong: 'Forte' };
    for (var i = 0; i < score; i++) bars[i].className = lvl;
    lbl.className = 'strength-label ' + lvl;
    lbl.textContent = labels[lvl];
  }

  /* ── Utilitário de erro ── */
  function setError(inputId, errId, show) {
    document.getElementById(errId).classList.toggle('show', show);
    if (inputId) document.getElementById(inputId).classList.toggle('error', show);
  }

  /* ── Login ── */
  function doLogin() {
    var email = document.getElementById('l-email').value.trim();
    var pw    = document.getElementById('l-password').value;
    var valid = true;
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { setError('l-email',    'err-l-email',    true);  valid = false; }
    else                                             { setError('l-email',    'err-l-email',    false); }
    if (!pw)                                         { setError('l-password', 'err-l-password', true);  valid = false; }
    else                                             { setError('l-password', 'err-l-password', false); }
    if (valid);
  }

  /* ── Registro ── */
function doSignup(event) {
    var fname   = document.getElementById('r-fname').value.trim();
    var lname   = document.getElementById('r-lname').value.trim();
    var email   = document.getElementById('r-email').value.trim();
    var pw      = document.getElementById('r-password').value;
    var confirm = document.getElementById('r-confirm').value;
    var terms   = document.getElementById('r-terms').checked;
    var valid   = true;

    if (!fname)  { setError('r-fname',    'err-r-fname',    true);  valid = false; } else { setError('r-fname',    'err-r-fname',    false); }
    if (!lname)  { setError('r-lname',    'err-r-lname',    true);  valid = false; } else { setError('r-lname',    'err-r-lname',    false); }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { setError('r-email', 'err-r-email', true); valid = false; } else { setError('r-email', 'err-r-email', false); }
    if (pw.length < 8)              { setError('r-password', 'err-r-password', true);  valid = false; } else { setError('r-password', 'err-r-password', false); }
    if (!confirm || pw !== confirm) { setError('r-confirm',  'err-r-confirm',  true);  valid = false; } else { setError('r-confirm',  'err-r-confirm',  false); }
    if (!terms)  { setError(null,  'err-r-terms', true);  valid = false; } else { setError(null, 'err-r-terms', false); }

    if (!valid) {
        if (event) event.preventDefault();
        return false;
    }

    return true;
}