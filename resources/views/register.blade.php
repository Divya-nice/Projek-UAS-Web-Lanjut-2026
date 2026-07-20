<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar Akun – GemaAksara</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --tan:    #c8a97e;
      --tan-dk: #8b6845;
      --tan-lt: #e8d8c4;
      --cream:  #f5ede0;
      --white:  #ffffff;
      --dark:   #2c1f0f;
      --mid:    #5a4230;
      --muted:  #9a8070;
      --danger: #c0392b;
      --ok:     #27ae60;
      --radius: 12px;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--cream);
      font-family: 'Lato', sans-serif;
      overflow: hidden;
    }

    body::before {
      content: '';
      position: fixed; inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none; z-index: 0;
    }

    .card {
      position: relative; z-index: 1;
      display: flex;
      width: min(720px, 96vw);
      min-height: 0;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 24px 60px rgba(44,31,15,.18), 0 4px 16px rgba(44,31,15,.08);
      animation: cardIn .7s cubic-bezier(.22,1,.36,1) both;
    }
    @keyframes cardIn {
      from { opacity:0; transform: translateY(32px) scale(.97); }
      to   { opacity:1; transform: none; }
    }

    .panel-left {
      flex: 0 0 36%;
      background: linear-gradient(155deg, #7a5634 0%, #c8a97e 60%, #e8d8c4 100%);
      padding: 32px 24px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 14px;
      position: relative;
      overflow: hidden;
    }

    .panel-left::before,
    .panel-left::after {
      content: '';
      position: absolute;
      border-radius: 50%;
      background: rgba(255,255,255,.08);
    }
    .panel-left::before { width: 280px; height: 280px; top: -80px; left: -80px; }
    .panel-left::after  { width: 200px; height: 200px; bottom: -60px; right: -60px; }

    .books-photo {
      width: 120px;
      height: 120px;
      object-fit: cover;
      object-position: center;
      border-radius: 16px;
      position: relative; z-index: 1;
      box-shadow:
        0 8px 32px rgba(44,31,15,.35),
        0 2px 8px rgba(44,31,15,.2),
        inset 0 1px 0 rgba(255,255,255,.15);
      animation: float 3.5s ease-in-out infinite;
      border: 2px solid rgba(255,255,255,.25);
    }
    @keyframes float {
      0%,100% { transform: translateY(0) rotate(-1deg); }
      50%      { transform: translateY(-10px) rotate(1deg); }
    }

    .brand-name {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--white);
      text-align: center;
      position: relative; z-index: 1;
      text-shadow: 0 2px 12px rgba(44,31,15,.25);
    }
    .brand-tagline {
      font-size: .78rem;
      font-weight: 300;
      color: rgba(255,255,255,.88);
      text-align: center;
      line-height: 1.6;
      position: relative; z-index: 1;
      max-width: 180px;
    }

    .dots {
      display: flex; gap: 8px; position: relative; z-index: 1;
    }
    .dot {
      width: 8px; height: 8px; border-radius: 50%;
      background: rgba(255,255,255,.4);
      transition: background .3s, transform .3s;
    }
    .dot.active { background: var(--white); transform: scale(1.3); }

    .deco-lines {
      position: absolute; bottom: 32px; left: 0; right: 0;
      display: flex; flex-direction: column; gap: 7px; padding: 0 28px;
      z-index: 1; opacity: .35;
    }
    .deco-line {
      height: 2px; border-radius: 2px; background: var(--white);
    }
    .deco-line:nth-child(1) { width: 55%; }
    .deco-line:nth-child(2) { width: 80%; }
    .deco-line:nth-child(3) { width: 65%; }

    .panel-right {
      flex: 1;
      background: var(--white);
      padding: 28px 32px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 0;
    }

    .form-header { margin-bottom: 14px; }
    .form-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--dark);
      line-height: 1.2;
    }
    .form-sub {
      font-size: .8rem;
      color: var(--muted);
      margin-top: 4px;
    }

    .progress-bar {
      height: 3px;
      background: var(--tan-lt);
      border-radius: 4px;
      margin-bottom: 14px;
      overflow: hidden;
    }
    .progress-fill {
      height: 100%;
      width: 0%;
      background: linear-gradient(90deg, var(--tan-dk), var(--tan));
      border-radius: 4px;
      transition: width .4s ease;
    }

    .field {
      position: relative;
      margin-bottom: 10px;
      animation: fieldIn .5s cubic-bezier(.22,1,.36,1) both;
    }
    .field:nth-child(1) { animation-delay: .05s; }
    .field:nth-child(2) { animation-delay: .10s; }
    .field:nth-child(3) { animation-delay: .15s; }
    .field:nth-child(4) { animation-delay: .20s; }
    @keyframes fieldIn {
      from { opacity:0; transform: translateX(16px); }
      to   { opacity:1; transform: none; }
    }

    .field input {
      width: 100%;
      height: 52 px;
      padding: 18px 14px 4px;
      font-size: .88rem;
      font-family: 'Lato', sans-serif;
      color: var(--dark);
      background: #faf7f4;
      border: 1.5px solid var(--tan-lt);
      border-radius: var(--radius);
      outline: none;
      transition: border-color .25s, background .25s, box-shadow .25s;
    }
    .field input:focus {
      border-color: var(--tan);
      background: var(--white);
      box-shadow: 0 0 0 4px rgba(200,169,126,.15);
    }
    .field input.has-error {
      border-color: var(--danger);
      box-shadow: 0 0 0 4px rgba(192,57,43,.10);
    }

    .field .toggle-pw {
      position: absolute;
      right: 14px; top: 50%;
      transform: translateY(-50%);
      cursor: pointer; background: none; border: none;
      color: var(--muted); font-size: 1rem;
      transition: color .2s;
    }
    .field .toggle-pw:hover { color: var(--tan-dk); }

    .field label {
      position: absolute;
      left: 14px; 
      top: 50%;
      transform: translateY(-50%);
      font-size: .88rem;
      color: var(--muted);
      pointer-events: none;
      transition: all .2s ease;
      background: transparent;
    }
    .field input:focus ~ label,
    .field input:not(:placeholder-shown) ~ label {
      top: 8px;
      transform: none;
      font-size: .72rem;
      color: var(--tan-dk);
      font-weight: 700;
      letter-spacing: .04em;
      text-transform: uppercase;
    }

    .field-error {
      font-size: .72rem;
      color: var(--danger);
      margin-top: 2px;
      display: none;
      padding-left: 4px;
    }
    .field-error.show { display: block; }

    .strength-wrap { margin: -4px 0 8px; }
    .strength-bars {
      display: flex; gap: 4px; margin-bottom: 3px;
    }
    .s-bar {
      flex: 1; height: 3px; border-radius: 2px;
      background: var(--tan-lt);
      transition: background .35s;
    }
    .strength-label {
      font-size: .7rem; color: var(--muted);
      text-align: right;
    }

    .btn-submit {
      width: 100%;
      padding: 11px;
      background: linear-gradient(135deg, #7a5634 0%, #c8a97e 100%);
      color: var(--white);
      border: none;
      border-radius: var(--radius);
      font-family: 'Playfair Display', serif;
      font-size: .95rem;
      font-weight: 700;
      letter-spacing: .03em;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition: transform .2s, box-shadow .2s;
      box-shadow: 0 6px 20px rgba(122,86,52,.35);
      margin-top: 4px;
    }
    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 28px rgba(122,86,52,.45);
    }
    .btn-submit:active { transform: scale(.98); }

    .ripple {
      position: absolute; border-radius: 50%;
      background: rgba(255,255,255,.35);
      transform: scale(0);
      animation: rippleAnim .55s linear;
      pointer-events: none;
    }
    @keyframes rippleAnim {
      to { transform: scale(4); opacity: 0; }
    }

    .form-footer {
      text-align: center;
      margin-top: 10px;
      font-size: .82rem;
      color: var(--muted);
    }
    .form-footer a {
      color: var(--tan-dk);
      font-weight: 700;
      text-decoration: none;
      border-bottom: 1.5px solid transparent;
      transition: border-color .2s;
    }
    .form-footer a:hover { border-color: var(--tan-dk); }

    .divider {
      display: flex; align-items: center; gap: 10px;
      margin: 8px 0;
      font-size: .75rem;
      color: var(--muted);
    }
    .divider::before, .divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--tan-lt);
    }

    .btn-social {
      width: 100%;
      padding: 8px;
      border: 1.5px solid var(--tan-lt);
      border-radius: var(--radius);
      background: transparent;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center; gap: 8px;
      font-family: 'Lato', sans-serif;
      font-size: .83rem;
      color: var(--dark);
      transition: background .2s, border-color .2s;
    }
    .btn-social:hover {
      background: #faf7f4;
      border-color: var(--tan);
    }

    .success-overlay {
      position: absolute; inset: 0;
      background: var(--white);
      display: flex; flex-direction: column;
      align-items: center; justify-content: center;
      gap: 16px;
      opacity: 0; pointer-events: none;
      transition: opacity .4s;
      z-index: 10;
      border-radius: 24px;
    }
    .success-overlay.show { opacity: 1; pointer-events: all; }
    .success-icon {
      width: 72px; height: 72px;
      border-radius: 50%;
      background: linear-gradient(135deg, #27ae60, #2ecc71);
      display: flex; align-items: center; justify-content: center;
      font-size: 2rem;
      box-shadow: 0 8px 24px rgba(39,174,96,.3);
      animation: popIn .5s cubic-bezier(.34,1.56,.64,1) both;
    }
    @keyframes popIn {
      from { transform: scale(0); } to { transform: scale(1); }
    }
    .success-text {
      font-family: 'Playfair Display', serif;
      font-size: 1.4rem;
      color: var(--dark);
    }
    .success-sub { font-size: .9rem; color: var(--muted); }
  </style>
</head>
<body>

<div class="card">

  <!-- LEFT PANEL -->
  <div class="panel-left">
    <img
    class="books-photo"
    src="{{ asset('images/books.jpeg') }}"
    alt="Tumpukan buku klasik">
    
    <div class="brand-name">GemaAksara</div>
    <p class="brand-tagline">Platform komunitas pecinta buku untuk berdiskusi, membaca bersama, dan mengikuti berbagai kegiatan literasi.</p>

    <div class="dots">
      <div class="dot active" id="d1"></div>
      <div class="dot" id="d2"></div>
      <div class="dot" id="d3"></div>
      <div class="dot" id="d4"></div>
    </div>

    <div class="deco-lines">
      <div class="deco-line"></div>
      <div class="deco-line"></div>
      <div class="deco-line"></div>
    </div>
  </div>

  <!-- RIGHT PANEL -->
  <div class="panel-right" style="position:relative;">

    <div class="success-overlay" id="successOverlay">
      <div class="success-icon">✓</div>
      <div class="success-text">Akun Berhasil Dibuat!</div>
      <div class="success-sub">Selamat datang di komunitas Gema Aksara </div>
    </div>

    <div class="form-header">
      <div class="form-title">Buat Akun</div>
      <div class="form-sub">Gabung ke komunitas literasi terbaik</div>
    </div>

    <div class="progress-bar">
      <div class="progress-fill" id="progressFill"></div>
    </div>

    <form id="registerForm" action="{{ route('register.process') }}" method="POST" novalidate>
      @csrf

      <div class="field">
        <input type="text" id="nama" name="nama" placeholder=" " autocomplete="name"
               value="{{ old('nama') }}" />
        <label for="nama">Nama Lengkap</label>
        <div class="field-error" id="namaErr">
          {{ $errors->first('nama') ?: 'Nama lengkap wajib diisi.' }}
        </div>
      </div>

      <div class="field">
        <input type="email" id="email" name="email" placeholder=" " autocomplete="email"
               value="{{ old('email') }}" />
        <label for="email">Email</label>
        <div class="field-error" id="emailErr">
          {{ $errors->first('email') ?: 'Masukkan email yang valid.' }}
        </div>
      </div>

      <div class="field">
        <input type="password" id="password" name="password" placeholder=" " autocomplete="new-password" />
        <label for="password">Password</label>
        <button type="button" class="toggle-pw" onclick="togglePw('password', this)" aria-label="Tampilkan password">👁</button>
        <div class="field-error" id="pwErr">
          {{ $errors->first('password') ?: 'Password minimal 8 karakter.' }}
        </div>
      </div>

      <div class="strength-wrap">
        <div class="strength-bars">
          <div class="s-bar" id="sb1"></div>
          <div class="s-bar" id="sb2"></div>
          <div class="s-bar" id="sb3"></div>
          <div class="s-bar" id="sb4"></div>
        </div>
        <div class="strength-label" id="strengthLabel">Kekuatan password</div>
      </div>

      <div class="field">
        <input type="password" id="konfirmasi" name="password_confirmation" placeholder=" " autocomplete="new-password" />
        <label for="konfirmasi">Konfirmasi Password</label>
        <button type="button" class="toggle-pw" onclick="togglePw('konfirmasi', this)" aria-label="Tampilkan konfirmasi">👁</button>
        <div class="field-error" id="konfErr">Password tidak cocok.</div>
      </div>

      <button type="submit" class="btn-submit" id="submitBtn">
        Daftar Sekarang
      </button>
    </form>

    <div class="form-footer">
      Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
    </div>
  </div>
</div>

<script>
  // Tampilkan error dari Laravel saat halaman load
  @if($errors->has('nama'))
    document.getElementById('nama').classList.add('has-error');
    document.getElementById('namaErr').classList.add('show');
  @endif
  @if($errors->has('email'))
    document.getElementById('email').classList.add('has-error');
    document.getElementById('emailErr').classList.add('show');
  @endif
  @if($errors->has('password'))
    document.getElementById('password').classList.add('has-error');
    document.getElementById('pwErr').classList.add('show');
  @endif

  const fields = ['nama','email','password','konfirmasi'];
  const dots   = [document.getElementById('d1'), document.getElementById('d2'),
                  document.getElementById('d3'), document.getElementById('d4')];
  const fill   = document.getElementById('progressFill');

  function updateProgress() {
    let filled = 0;
    fields.forEach((id, i) => {
      const el = document.getElementById(id);
      if (el.value.trim()) {
        filled++;
        dots[i].classList.add('active');
      } else {
        dots[i].classList.remove('active');
      }
    });
    dots[0].classList.add('active');
    fill.style.width = (filled / fields.length * 100) + '%';
  }

  fields.forEach(id => {
    document.getElementById(id).addEventListener('input', updateProgress);
  });

  const bars   = [1,2,3,4].map(n => document.getElementById('sb'+n));
  const sLabel = document.getElementById('strengthLabel');
  const colors = ['#c0392b','#e67e22','#f1c40f','#27ae60'];
  const labels = ['Sangat Lemah','Cukup','Kuat','Sangat Kuat'];

  document.getElementById('password').addEventListener('input', function() {
    const v = this.value;
    let score = 0;
    if (v.length >= 8)           score++;
    if (/[A-Z]/.test(v))         score++;
    if (/[0-9]/.test(v))         score++;
    if (/[^A-Za-z0-9]/.test(v))  score++;

    bars.forEach((b, i) => {
      b.style.background = i < score ? colors[score - 1] : 'var(--tan-lt)';
    });
    sLabel.textContent = v.length ? (labels[score - 1] || 'Sangat Lemah') : 'Kekuatan password';
    sLabel.style.color = v.length ? colors[score - 1] : 'var(--muted)';
  });

  function togglePw(id, btn) {
    const inp = document.getElementById(id);
    const isText = inp.type === 'text';
    inp.type = isText ? 'password' : 'text';
    btn.textContent = isText ? '👁' : '🙈';
  }

  document.getElementById('submitBtn').addEventListener('click', function(e) {
    const btn = this;
    const r = document.createElement('span');
    r.className = 'ripple';
    const d = Math.max(btn.clientWidth, btn.clientHeight);
    const rect = btn.getBoundingClientRect();
    r.style.cssText = `width:${d}px;height:${d}px;left:${e.clientX-rect.left-d/2}px;top:${e.clientY-rect.top-d/2}px`;
    btn.appendChild(r);
    setTimeout(() => r.remove(), 600);
  });

  document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let ok = true;

    const nama = document.getElementById('nama');
    const email = document.getElementById('email');
    const pw = document.getElementById('password');
    const kf = document.getElementById('konfirmasi');

    const setErr = (inp, errId, show) => {
      inp.classList.toggle('has-error', show);
      document.getElementById(errId).classList.toggle('show', show);
    };

    const nameOk = nama.value.trim().length >= 2;
    setErr(nama, 'namaErr', !nameOk); if (!nameOk) ok = false;

    const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value);
    setErr(email, 'emailErr', !emailOk); if (!emailOk) ok = false;

    const pwOk = pw.value.length >= 8;
    setErr(pw, 'pwErr', !pwOk); if (!pwOk) ok = false;

    const kfOk = kf.value === pw.value && kf.value.length > 0;
    setErr(kf, 'konfErr', !kfOk); if (!kfOk) ok = false;

    if (ok) {
      const btn = document.getElementById('submitBtn');
      btn.textContent = 'Mendaftar...';
      btn.disabled = true;

      // Tampilkan animasi sukses sebentar, lalu submit ke server
      setTimeout(() => {
        document.getElementById('successOverlay').classList.add('show');
        setTimeout(() => this.submit(), 800);
      }, 900);
    }
  });

  fields.forEach(id => {
    document.getElementById(id).addEventListener('input', function() {
      this.classList.remove('has-error');
      const errEl = this.closest('.field').querySelector('.field-error');
      if (errEl) errEl.classList.remove('show');
    });
  });
</script>
</body>
</html>