<?php require __DIR__ . '/_gate.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="description" content="Sandra Pudja — freelance TV producer in Berlin. Studio shows, live and event production, shoot organisation and logistics, and right-hand support for founders and small teams. EN · DE · HR.">
<link rel="canonical" href="https://sandrapudja.com/">
<link rel="alternate" hreflang="en" href="https://sandrapudja.com/">
<link rel="alternate" hreflang="de" href="https://sandrapudja.com/de/">
<meta property="og:type" content="website">
<meta property="og:title" content="Sandra Pudja — TV producer, Berlin">
<meta property="og:description" content="TV producer and organisational wonder. Studio, live and location productions in Berlin and across Europe.">
<meta property="og:image" content="https://sandrapudja.com/og.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Sandra Pudja — TV producer, Berlin">
<meta property="og:site_name" content="Sandra Pudja">
<meta name="twitter:image" content="https://sandrapudja.com/og.jpg">
<meta property="og:url" content="https://sandrapudja.com/">
<meta name="twitter:card" content="summary_large_image">
<meta name="theme-color" content="#0c0c0e">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230c0c0e'/%3E%3Ccircle cx='16' cy='16' r='6' fill='%23ff3b30'/%3E%3C/svg%3E">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Person","name":"Sandra Pudja","jobTitle":"TV producer","url":"https://sandrapudja.com/","image":"https://sandrapudja.com/sandra.jpg","email":"hello@sandrapudja.com","address":{"@type":"PostalAddress","addressLocality":"Berlin","addressCountry":"DE"},"knowsLanguage":["en","de","hr"],"sameAs":["https://www.instagram.com/","https://www.linkedin.com/"]}</script>
<style>:root{padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}img{max-width:100%}[hidden]{display:none!important}</style>
<title>Sandra Pudja — TV producer, Berlin</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=Instrument+Serif&family=IBM+Plex+Mono:wght@400;500&display=swap">
<style>
/* Layout concept: modern dark site; the control room is a contained element in the hero (split). Normal cursor, soft reveals, sticky nav with timecode and channel, services grid, sticky-left rundown, booking card with live monitor. */
:root{
  --bg:#0c0c0e;--bg-2:#111114;--panel:#17171b;--panel-2:#1f1f24;--line:#26262c;--line-strong:#3a3a42;
  --fg:#ecebe6;--muted:#8c8b86;--rec:#ff3b30;--rec-dim:#5a1b17;--tally:#f2b544;
  --font-sans:"Instrument Sans","Helvetica Neue",Arial,sans-serif;--font-mono:"IBM Plex Mono",Menlo,Consolas,monospace;--font-serif:"Instrument Serif","Georgia",serif;
  --gl:max(16px,env(safe-area-inset-left,0px));--gr:max(16px,env(safe-area-inset-right,0px));
  color-scheme:dark;
}
*{box-sizing:border-box}
body{margin:0;background:var(--bg);color:var(--fg);font-family:var(--font-sans);font-size:16px;line-height:1.6;overflow-x:hidden}
h1,h2,h3{margin:0;font-weight:600;text-wrap:balance;letter-spacing:-.025em}
button,input,select,textarea{font:inherit;color:inherit}
::selection{background:var(--fg);color:var(--bg)}
.wrap{padding-left:var(--gl);padding-right:var(--gr);max-width:1280px;margin:0 auto}
.mono{font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}
.rec-dot{width:7px;height:7px;border-radius:50%;background:var(--rec);animation:blink 1.4s steps(1) infinite;flex:0 0 auto}
@keyframes blink{50%{opacity:.15}}

/* intro */
.intro{position:fixed;inset:0;z-index:80;background:var(--bg);display:grid;place-items:center;transition:opacity .5s}
.intro.off{opacity:0;pointer-events:none}
.intro .n{font-size:clamp(80px,22vw,220px);font-weight:700;letter-spacing:-.05em;line-height:1}
.intro .n.air{font-size:clamp(28px,6vw,64px);color:var(--rec);letter-spacing:.2em;text-transform:uppercase;font-family:var(--font-mono);font-weight:500}
.intro .bar{position:absolute;left:var(--gl);right:var(--gr);bottom:calc(32px + env(safe-area-inset-bottom,0px));height:2px;background:var(--line)}
.intro .bar i{display:block;height:100%;width:0;background:var(--fg)}

/* nav */
.head{position:sticky;top:env(safe-area-inset-top,0px);z-index:40;background:rgba(12,12,14,.85);backdrop-filter:blur(10px);border-bottom:1px solid var(--line)}
body::before{content:"";position:fixed;inset:0 0 auto;height:env(safe-area-inset-top,0px);z-index:41;background:var(--bg)}
.nav{display:flex;justify-content:space-between;align-items:center;height:56px;gap:16px}
.nav .brand{display:flex;align-items:center;gap:12px;font-weight:600;letter-spacing:-.01em;white-space:nowrap}
.nav .brand .hud{display:flex;gap:12px;align-items:center}
.nav .brand .hud .mono{color:var(--muted);font-variant-numeric:tabular-nums}
.nav .links{display:flex;gap:24px}
.nav .links a{color:var(--muted);text-decoration:none;font-size:14px;transition:color .2s}
.nav .links a:hover,.nav .links a.on{color:var(--fg)}
@media (max-width:860px){.nav .links,.nav .brand .hud{display:none}}
.nav .right{display:flex;gap:12px;align-items:center}
.lang{position:relative}
.lang-cur{display:inline-flex;align-items:center;gap:8px;background:none;border:1px solid var(--line);border-radius:999px;padding:6px 11px 6px 9px;font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;color:var(--fg);cursor:pointer;transition:border-color .2s}
.lang-cur:hover,.lang-cur[aria-expanded="true"]{border-color:var(--line-strong)}
.lang-cur .dot{width:6px;height:6px;border-radius:50%;background:var(--rec)}
.lang-cur:focus-visible{outline:2px solid var(--tally);outline-offset:1px}
.lang-menu[hidden]{display:none !important}
.lang-menu{position:absolute;right:0;top:calc(100% + 8px);min-width:150px;background:var(--panel);border:1px solid var(--line-strong);border-radius:12px;padding:4px;display:grid;gap:2px;box-shadow:0 20px 50px rgba(0,0,0,.5);z-index:50}
.lang-menu button{display:flex;justify-content:space-between;align-items:center;gap:14px;width:100%;background:none;border:0;border-radius:8px;padding:8px 10px;font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;color:var(--muted);cursor:pointer;text-align:left}
.lang-menu button span{font-family:var(--font-sans);font-size:13px;letter-spacing:0;color:var(--muted)}
.lang-menu button:hover,.lang-menu button:focus-visible{background:var(--panel-2);color:var(--fg);outline:0}
.lang-menu button[aria-pressed="true"]{color:var(--fg)}
.lang-menu button[aria-pressed="true"] span{color:var(--fg)}
.lang-menu button[aria-pressed="true"]::after{content:"";width:6px;height:6px;border-radius:50%;background:var(--rec);margin-left:auto}
.pill{display:inline-flex;align-items:center;gap:8px;background:var(--fg);color:var(--bg);text-decoration:none;font-size:14px;font-weight:500;padding:8px 14px;border-radius:999px;transition:background .2s;white-space:nowrap}
.pill:hover{background:var(--rec);color:#fff}
.hidden-btn{background:none;border:0;padding:0;cursor:pointer;display:flex;align-items:center;color:inherit;font:inherit}
.progress{position:fixed;left:0;top:0;height:2px;width:0;background:var(--rec);z-index:42}

/* monitors (shared) */
.mon{position:relative;background:var(--panel);border:1px solid var(--line);border-radius:6px;overflow:hidden;transition:border-color .3s,transform .4s}
.mon .lbl{position:absolute;left:8px;top:6px;z-index:2;font-family:var(--font-mono);font-size:9px;letter-spacing:.12em;color:var(--muted)}
.mon .tally{position:absolute;right:7px;top:7px;z-index:2;width:6px;height:6px;border-radius:50%;background:var(--line-strong);transition:background .2s}
.mon.on .tally{background:var(--rec)}
.mon img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:var(--pos,50% 20%);transform:scale(var(--zoom,1.1));transform-origin:var(--pos,50% 20%);filter:saturate(.8) contrast(1.05)}
.mon.bw img{filter:grayscale(1) contrast(1.12)}
.mon.warm img{filter:sepia(.35) saturate(1.1) contrast(1.05)}
.mon canvas{position:absolute;inset:0;width:100%;height:100%;opacity:.95;image-rendering:pixelated}
.mon .bars{position:absolute;inset:0;display:grid;grid-template-columns:repeat(7,1fr)}
.mon .bars i{display:block}
.mon .word{position:absolute;inset:0;display:grid;place-items:center;font-family:var(--font-mono);font-size:10px;letter-spacing:.14em;color:var(--muted);text-transform:uppercase}
.mon.live{background:#1a1012;border-color:var(--rec-dim)}
.mon.live .word{color:var(--rec);font-weight:500}
.mon.name .word{font-family:var(--font-sans);font-size:clamp(16px,2.2vw,30px);font-weight:700;letter-spacing:-.03em;color:var(--fg);text-transform:none}

/* hero shared */
.h1{font-size:clamp(56px,9.5vw,140px);line-height:.9;letter-spacing:-.05em;font-weight:700}
.h1 span{display:block;color:var(--muted);font-weight:500;font-size:.42em;letter-spacing:-.03em;margin-top:.2em}
.sub{display:flex;flex-wrap:wrap;gap:10px 22px;align-items:center}
.sub .mono{color:var(--fg)}
.sub .mono+.mono::before{content:"";display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--rec);margin-right:22px;vertical-align:middle}
.ctas{display:flex;flex-wrap:wrap;gap:12px;align-items:center}
.btn{display:inline-flex;align-items:center;gap:10px;border:1px solid var(--line-strong);background:transparent;color:var(--fg);text-decoration:none;font-size:15px;font-weight:500;padding:14px 22px;border-radius:999px;cursor:pointer;transition:border-color .2s,background .2s,color .2s}
.btn:hover,.btn:focus-visible{border-color:var(--fg);outline:0}
.btn.primary{background:var(--fg);color:var(--bg);border-color:var(--fg)}
.btn.primary:hover,.btn.primary:focus-visible{background:var(--rec);border-color:var(--rec);color:#fff}
.stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:1px;background:var(--line);border:1px solid var(--line);border-radius:12px;overflow:hidden;margin-bottom:clamp(40px,7vh,72px)}
.stat{background:var(--bg);padding:20px 22px;display:grid;gap:6px}
.stat b{font-size:clamp(26px,3vw,40px);font-weight:600;letter-spacing:-.04em;line-height:1}
.stat span{font-size:13px;color:var(--muted)}

/* sections */
.sec{padding-block:clamp(72px,11vh,140px);border-top:1px solid var(--line)}
.sec-head{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:24px 48px;align-items:end;margin-bottom:clamp(32px,5vh,56px)}
@media (max-width:860px){.sec-head{grid-template-columns:minmax(0,1fr)}}
.sec-head .k{display:flex;gap:14px;align-items:center;margin-bottom:14px}
.sec-head .k i{display:block;width:28px;height:1px;background:var(--line-strong)}
.sec-head h2{font-size:clamp(36px,5.6vw,80px);line-height:.95}
.sec-head p{margin:0;color:var(--muted);max-width:30em;font-size:clamp(16px,1.3vw,18px)}
.rv{transition:opacity .7s ease,transform .7s ease}
.js .rv{opacity:0;transform:translateY(22px)}
.js .rv.in{opacity:1;transform:none}

/* services */
.cams{display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,250px),1fr));gap:12px}
.cam{position:relative;background:var(--panel);border:1px solid var(--line);border-radius:14px;padding:150px 22px 22px;min-height:280px;display:flex;flex-direction:column;justify-content:flex-end;gap:10px;text-align:left;width:100%;cursor:pointer;transition:border-color .25s,background .25s,transform .25s;overflow:hidden}
.cam:hover,.cam:focus-visible,.cam.open{border-color:var(--line-strong);background:var(--panel-2);transform:translateY(-2px);outline:0}
.cam .top{position:absolute;left:18px;right:18px;top:16px;display:flex;justify-content:space-between;align-items:center;z-index:2}
.cam .tally{width:7px;height:7px;border-radius:50%;background:var(--line-strong);transition:background .2s}
.cam:hover .tally,.cam.open .tally,.cam:focus-visible .tally{background:var(--rec)}
.cam h3{font-size:clamp(24px,2.4vw,32px);line-height:1.05;position:relative;z-index:2}
.cam p{margin:0;color:var(--muted);font-size:15px;position:relative;z-index:2}
.cam .more{color:var(--fg);max-height:0;overflow:hidden;transition:max-height .4s,margin .4s}
.cam.open .more{max-height:480px;margin-top:6px}
.cam .hint{font-family:var(--font-mono);font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--line-strong);position:relative;z-index:2}
.cam .art{position:absolute;left:0;right:0;top:0;height:170px;z-index:0;pointer-events:none;overflow:hidden}
.cam .art::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(23,23,27,0) 0%,rgba(23,23,27,.2) 55%,rgba(23,23,27,1) 100%)}
.cam .art svg{position:absolute;left:0;top:32px;width:100%;height:calc(100% - 32px);opacity:.6;transition:opacity .4s}
@media (min-width:861px){.cam{padding-top:180px}.cam .art{height:200px}.cam .art svg{opacity:.7}}
.cam:hover .art svg,.cam.open .art svg,.cam:focus-visible .art svg{opacity:1}
.cam .art .ln{fill:none;stroke:var(--line-strong);stroke-width:1;vector-effect:non-scaling-stroke}
.cam .art .hi{fill:none;stroke:var(--tally);stroke-width:1.5;vector-effect:non-scaling-stroke}
.cam .art .fg{fill:var(--line-strong)}
.cam .art .rd{fill:var(--rec)}
.cam .art text{font-family:var(--font-mono);font-size:7px;letter-spacing:.1em;fill:var(--muted)}
/* 1 TV studio: three monitors, bars cycle, tally hops */
.art-tv .bar{transition:transform .5s}
.cam:hover .art-tv .m1{animation:tvflick 2.4s steps(1) infinite}
.cam:hover .art-tv .m2{animation:tvflick 2.4s steps(1) .8s infinite}
.cam:hover .art-tv .m3{animation:tvflick 2.4s steps(1) 1.6s infinite}
@keyframes tvflick{0%,100%{opacity:1}33%{opacity:.35}}
.cam:hover .art-tv .tl{animation:tallyhop 2.4s steps(1) infinite}
@keyframes tallyhop{0%{transform:translateX(0)}33%{transform:translateX(62px)}66%{transform:translateX(124px)}100%{transform:translateX(0)}}
/* 2 Live: waveform + ON AIR pulse + countdown ticks */
.art-live .wv{transform-origin:50% 50%;transition:transform .3s}
.cam:hover .art-live .wv{animation:wv .9s ease-in-out infinite alternate}
.art-live .wv:nth-child(2n){animation-delay:.15s}.art-live .wv:nth-child(3n){animation-delay:.3s}
@keyframes wv{from{transform:scaleY(.35)}to{transform:scaleY(1.25)}}
.cam:hover .art-live .onair{animation:blink 1.2s steps(1) infinite}
.cam:hover .art-live .sweep{animation:sweep 2.2s linear infinite}
@keyframes sweep{from{transform:translateX(0)}to{transform:translateX(200px)}}
/* 3 Organisation: call-sheet grid, rows fill in, a check appears */
.art-org .row{opacity:.5}
.cam:hover .art-org .row{animation:rowin 2.4s ease-out infinite}
.art-org .row:nth-child(2){animation-delay:.3s}.art-org .row:nth-child(3){animation-delay:.6s}.art-org .row:nth-child(4){animation-delay:.9s}.art-org .row:nth-child(5){animation-delay:1.2s}
@keyframes rowin{0%{opacity:.3;transform:translateX(-6px)}25%,100%{opacity:1;transform:none}}
.art-org .chk{stroke-dasharray:40;stroke-dashoffset:40}
.cam:hover .art-org .chk{animation:chk 2.4s ease-out infinite}
@keyframes chk{0%,55%{stroke-dashoffset:40}75%,100%{stroke-dashoffset:0}}
/* 4 Right hand: a to-do list, items tick off one by one */
.art-hand .tk,.art-hand .st{stroke-dasharray:1;stroke-dashoffset:1}
.cam .art-hand .st{stroke:var(--muted);stroke-width:1}
.art-hand .r1 .tk,.art-hand .r1 .st{stroke-dashoffset:0}
.cam:hover .art-hand .tk,.cam:hover .art-hand .st{animation:tick 3.4s ease-out infinite}
.art-hand .r2 *{animation-delay:.4s !important}.art-hand .r3 *{animation-delay:.8s !important}.art-hand .r4 *{animation-delay:1.2s !important}.art-hand .r5 *{animation-delay:1.6s !important}
@keyframes tick{0%{stroke-dashoffset:1}18%,100%{stroke-dashoffset:0}}
@media (prefers-reduced-motion:reduce){.cam:hover .art *{animation:none !important}}

/* slate (clapperboard) used on the big screen, a monitor and the booking monitor */
.slate{position:absolute;inset:0;display:grid;grid-template-rows:14% 1fr;background:#141417;color:var(--fg);font-family:var(--font-mono);text-transform:uppercase;letter-spacing:.12em}
.slate .clap{background:repeating-linear-gradient(-45deg,#ecebe6 0 14%,#141417 14% 28%);border-bottom:2px solid #ecebe6}
.slate .g{display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:1.4fr 1fr 1fr;border-left:1px solid #3a3a42}
.slate .g>div{border-right:1px solid #3a3a42;border-bottom:1px solid #3a3a42;padding:4% 5%;display:flex;flex-direction:column;justify-content:space-between;min-width:0}
.slate .g>div.w{grid-column:1/-1}
.slate small{font-size:clamp(6px,.6vw,9px);color:var(--muted)}
.slate b{font-family:var(--font-sans);font-weight:700;letter-spacing:-.02em;text-transform:none;font-size:clamp(9px,2.2vw,30px);line-height:1;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.slate .g>div.w b{font-size:clamp(12px,3.4vw,46px)}
.mon .slate{top:20px;grid-template-rows:24% 1fr}.mon .slate .g{grid-template-rows:1fr}.mon .slate .g>div:not(.w){display:none}.mon .slate small{display:none}.mon .slate .g>div.w{justify-content:center}.mon .slate .g>div.w b{font-size:clamp(8px,.75vw,11px);white-space:normal}
.live .slate{grid-template-rows:9% 1fr}.live .slate .g{grid-template-columns:1fr 1fr;grid-template-rows:1.3fr repeat(3,1fr) 1.1fr}.live .slate .g>div{padding:5% 6%}
.live .slate b{font-size:clamp(14px,2vw,26px)}.live .slate .g>div.w b{font-size:clamp(22px,3.4vw,44px)}.live .slate small{font-size:10px}

/* stacked cards */
.stack{position:relative;--n:6}
.scard{position:sticky;top:calc(76px + var(--i,0)*18px + env(safe-area-inset-top,0px));margin-bottom:36vh;background:var(--panel);border:1px solid var(--line);border-radius:18px;padding:clamp(24px,3.6vw,44px);min-height:0;display:grid;grid-template-columns:auto minmax(0,1fr);gap:clamp(18px,3vw,40px);align-items:start;transform-origin:top center;will-change:transform,filter;box-shadow:0 -14px 40px rgba(0,0,0,.55)}
.scard:last-child{margin-bottom:0}
@media (max-width:640px){.scard{top:calc(70px + var(--i,0)*12px + env(safe-area-inset-top,0px));margin-bottom:46vh}}
.scard:nth-child(2){background:#19191e}.scard:nth-child(3){background:#1b1b20}.scard:nth-child(4){background:#1d1d22}.scard:nth-child(5){background:#1f1f24}.scard:nth-child(6){background:#212126}
.scard .n{font-size:clamp(64px,10vw,150px);font-weight:700;letter-spacing:-.06em;line-height:.8;color:var(--line-strong);font-variant-numeric:tabular-nums}
.scard .n b{display:block;font-size:.16em;font-weight:500;letter-spacing:.14em;color:var(--muted);font-family:var(--font-mono);margin-top:14px}
.scard h3{font-size:clamp(30px,4.6vw,66px);line-height:1;letter-spacing:-.04em;max-width:12em}
.scard p{margin:16px 0 0;color:var(--muted);font-size:clamp(16px,1.5vw,20px);max-width:28em}
.scard .tcx{position:absolute;right:clamp(18px,3vw,32px);top:clamp(18px,3vw,32px);display:flex;gap:10px;align-items:center}
.scard .tcx .tally{width:7px;height:7px;border-radius:50%;background:var(--line-strong)}
.scard.hot .tcx .tally{background:var(--rec)}
.scard.hot .n{color:var(--fg)}
.scard p.long{color:var(--fg);opacity:.85;font-size:clamp(15px,1.3vw,17px);max-width:34em;margin-top:14px}
.scard .scta{display:flex;flex-wrap:wrap;align-items:center;gap:14px;margin-top:22px}
.scard .scta .btn{padding:11px 18px;font-size:14px}
.stack-end{height:26vh}
.way-cta{display:grid;grid-template-columns:minmax(0,1fr) auto;gap:24px;align-items:center;border:1px solid var(--line);border-radius:18px;padding:clamp(22px,3.5vw,40px);background:var(--bg-2)}
.way-cta h3{font-size:clamp(24px,3vw,40px);line-height:1}
.way-cta p{margin:8px 0 0;color:var(--muted);max-width:34em}
@media (max-width:860px){.way-cta{grid-template-columns:minmax(0,1fr)}}
.stack-hint{display:flex;gap:12px;align-items:center;margin-bottom:18px}
.stack-hint i{display:block;width:28px;height:1px;background:var(--line-strong)}
@media (max-width:640px){.scard{grid-template-columns:minmax(0,1fr);min-height:auto}.scard .n{font-size:56px}}
/* booking */
.book{display:grid;grid-template-columns:minmax(0,1.1fr) minmax(0,.9fr);gap:clamp(24px,5vw,80px);align-items:start}
@media (max-width:860px){.book{grid-template-columns:minmax(0,1fr)}}
.card{background:var(--panel);border:1px solid var(--line);border-radius:16px;padding:clamp(20px,3vw,32px)}
form{display:grid;gap:16px}
.field{display:grid;gap:6px}
.field label{font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}
.field input,.field select,.field textarea{width:100%;max-width:100%;box-sizing:border-box;background:var(--bg);border:1px solid var(--line);border-radius:10px;padding:12px 14px;min-width:0;-webkit-appearance:none;appearance:none}
.field select{background-image:linear-gradient(45deg,transparent 50%,var(--muted) 50%),linear-gradient(135deg,var(--muted) 50%,transparent 50%);background-position:calc(100% - 20px) 50%,calc(100% - 14px) 50%;background-size:6px 6px;background-repeat:no-repeat;padding-right:36px}
.field textarea{min-height:120px;resize:vertical}
.field input:focus-visible,.field select:focus-visible,.field textarea:focus-visible{outline:0;border-color:var(--fg)}
.field .err{display:none;font-size:13px;color:var(--rec)}
.field.bad .err{display:block}
.field.bad input,.field.bad textarea{border-color:var(--rec)}
.row2{display:grid;grid-template-columns:1fr 1fr;gap:16px}
@media (max-width:520px){.row2{grid-template-columns:1fr}}
.mail-line{display:flex;flex-wrap:wrap;align-items:center;gap:10px;font-size:13px;color:var(--muted);margin:0}
.mail-line code{font-family:var(--font-mono);color:var(--fg);user-select:all}
.mail-line button{background:none;border:1px solid var(--line);border-radius:999px;padding:4px 10px;font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);cursor:pointer}
.mail-line button:hover{border-color:var(--fg);color:var(--fg)}
.sent{display:none;border:1px solid var(--line);border-radius:10px;padding:12px 14px;font-size:14px;color:var(--muted)}
.sent.on{display:block}
.sent.ok{border-color:#2f6b3a;color:var(--fg);background:#102015}
.sent.err{border-color:var(--rec-dim);color:var(--fg)}
.live{position:relative;border-radius:16px;overflow:hidden;border:1px solid var(--rec-dim);aspect-ratio:4/5;max-width:100%;background:var(--panel)}
.live img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:50% 15%;filter:saturate(.8) contrast(1.05)}
.live .tag,.live .tc2{position:absolute;top:12px;display:flex;align-items:center;gap:8px;background:rgba(12,12,14,.7);backdrop-filter:blur(6px);padding:6px 10px;border-radius:999px;font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--fg)}
.live .tag{left:14px}.live .tc2{right:14px;font-variant-numeric:tabular-nums;text-transform:none}
.live .foot{position:absolute;left:14px;right:14px;bottom:14px;display:grid;gap:4px;background:rgba(12,12,14,.7);backdrop-filter:blur(6px);padding:12px 14px;border-radius:12px}
.live .foot b{font-size:18px;font-weight:600;letter-spacing:-.02em}
.live .foot span{font-size:13px;color:var(--muted)}

footer{border-top:1px solid var(--line);padding-block:48px calc(56px + env(safe-area-inset-bottom,0px))}
.fgrid{display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,200px),1fr));gap:28px}
.fgrid h4{margin:0 0 12px;font-size:11px;font-family:var(--font-mono);letter-spacing:.12em;text-transform:uppercase;color:var(--muted);font-weight:500}
.fgrid ul{list-style:none;margin:0;padding:0;display:grid;gap:8px}
.fgrid a{color:var(--muted);text-decoration:none;font-size:14px}
.fgrid a:hover{color:var(--fg)}
.fabout{margin:0;color:var(--muted);font-size:14px;max-width:28em}
.fbot{margin-top:36px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px}
footer .in{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px}
footer nav{display:flex;gap:20px}
footer a{color:var(--muted);text-decoration:none;font-size:14px}
footer a:hover{color:var(--fg)}

@media (prefers-reduced-motion:reduce){.rec-dot{animation:none}.js .rv{opacity:1;transform:none}}

.hero{padding-block:clamp(48px,9vh,110px) clamp(40px,7vh,80px);display:grid;grid-template-columns:minmax(0,1fr) minmax(0,.9fr);gap:clamp(28px,5vw,72px);align-items:center}
@media (max-width:860px){.hero{grid-template-columns:minmax(0,1fr)}}
.hero .sub{margin-top:24px;flex-direction:row;align-items:baseline;gap:6px 18px}
.hero .sub .mono{font-family:var(--font-sans);font-weight:700;font-size:clamp(20px,2.4vw,32px);letter-spacing:-.03em;text-transform:none;color:var(--fg);line-height:1.1}
.hero .sub .mono+.mono::before{content:"";display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--rec);margin-right:18px;vertical-align:middle}
.hero .sub .mono.loc{font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--muted);flex-basis:100%;margin-top:4px}
.hero .sub .mono.loc::before{display:none}
/* role line as a stacked list, a red dot before each item */
.hero .sub{flex-direction:column;align-items:flex-start;gap:6px}
.hero .sub .mono:not(.loc){font-size:clamp(18px,1.9vw,26px)}
.hero .sub .mono:not(.loc)::before{content:"";display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--rec);margin-right:14px;vertical-align:middle}
.hero .ctas{margin-top:28px}
/* multiviewer */
.mv{background:#0a0a0c;border:1px solid var(--line-strong);border-radius:14px;padding:10px;display:grid;gap:8px;box-shadow:0 30px 80px rgba(0,0,0,.5);transform:translate3d(var(--px,0),var(--py,0),0)}
.mv .pgm{position:relative;aspect-ratio:16/10;border-radius:8px;overflow:hidden;background:var(--panel);border:1px solid var(--rec-dim)}
.mv .pgm img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:50% 18%;filter:saturate(.8) contrast(1.05);transition:opacity .25s}
.mv .pgm .feed{position:absolute;inset:0;opacity:0;transition:opacity .3s}
.mv .pgm .feed.on{opacity:1}
.mv .pgm .feed .bars{position:absolute;inset:0;display:grid;grid-template-columns:repeat(7,1fr)}
.mv .pgm .feed .bars i{display:block}
.mv .pgm .feed .word{position:absolute;inset:0;display:grid;place-items:center;font-family:var(--font-mono);font-size:clamp(14px,1.6vw,22px);letter-spacing:.2em;color:var(--muted);text-transform:uppercase}
.mv .pgm .feed.live{background:#1a1012}
.mv .pgm .feed.nosig{background:#2a2a2f}.mv .pgm .feed.nosig .word{color:#6a6a72}
.mon.nosig{background:#2a2a2f}.mon.nosig .word{color:#6a6a72}.mv .pgm .feed.live .word{color:var(--rec)}
.mv .pgm canvas{position:absolute;inset:0;width:100%;height:100%;opacity:1;image-rendering:pixelated}
.mv .pgm .ov{position:absolute;left:10px;right:10px;top:10px;display:flex;justify-content:space-between;align-items:center;z-index:3}
.mv .pgm .ov .chip{display:flex;align-items:center;gap:7px;background:rgba(10,10,12,.75);backdrop-filter:blur(6px);padding:5px 9px;border-radius:999px;font-family:var(--font-mono);font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--fg)}
.mv .pgm .ov .chip.tc{text-transform:none;font-variant-numeric:tabular-nums}
.mv .pgm .safe{position:absolute;left:10%;top:10%;right:10%;bottom:10%;border:1px solid rgba(236,235,230,.14);pointer-events:none;z-index:2}
.mv .pgm .safe::before,.mv .pgm .safe::after{content:"";position:absolute;background:rgba(236,235,230,.2)}
.mv .pgm .safe::before{left:50%;top:48%;width:1px;height:4%}
.mv .pgm .safe::after{top:50%;left:48%;height:1px;width:4%}
.mv .pvw{display:grid;grid-template-columns:repeat(6,1fr);gap:6px}
.mv .pvw .mon{aspect-ratio:16/10;border-radius:4px;cursor:pointer;border-color:var(--line);transform:none}
.mv .pvw .mon:hover{border-color:var(--line-strong)}
.mv .pvw .mon.sel{border-color:var(--rec);box-shadow:0 0 0 1px var(--rec)}
.mv .pvw .mon .lbl{font-size:8px;left:5px;top:4px}
.mv .pvw .mon .tally{width:5px;height:5px;right:5px;top:5px}
.mv .pvw .mon .word{font-size:8px}
.mv .pvw .mon.name .word{font-size:clamp(10px,1vw,13px)}
.mv .deck{display:grid;grid-template-columns:minmax(0,1fr) auto;gap:12px;align-items:center;padding:4px 2px 0}
.mv .meters{display:flex;gap:4px;align-items:flex-end;height:22px}
.mv .meters i{display:block;width:4px;height:40%;background:var(--line-strong);border-radius:1px;transform-origin:bottom}
.mv .meters i.g{background:#3f9a44}.mv .meters i.y{background:var(--tally)}.mv .meters i.r{background:var(--rec)}
.mv .deck .st{display:flex;gap:12px;align-items:center}
.mv .deck .st .mono{font-variant-numeric:tabular-nums}
.mv .deck .onair{display:inline-flex;align-items:center;gap:6px;border:1px solid var(--rec-dim);color:var(--rec);padding:3px 8px;border-radius:4px;font-family:var(--font-mono);font-size:10px;letter-spacing:.14em}
.mv-cap{margin-top:12px;display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap}
@media (max-width:860px){.mv .pvw{grid-template-columns:repeat(3,1fr)}.mv .deck{grid-template-columns:minmax(0,1fr)}}

</style>
</head>
<body>

<div class="intro" id="intro" aria-hidden="true"><div class="n" id="intro-n">3</div><div class="bar"><i id="intro-bar"></i></div></div>
<div class="progress" id="progress" aria-hidden="true"></div>


<header class="head" id="head"><div class="wrap nav">
  <div class="brand"><span class="rec-dot"></span><span>Sandra Pudja</span><span class="hud"><span class="mono" id="hud-tc">00:00:00:00</span><span class="mono" id="hud-ch">CH 01</span></span></div>
  <nav class="links" id="links"><a href="#services" data-i18n="svc.eyebrow"></a><a href="#way" data-i18n="way.eyebrow"></a><a href="#booking-sec" data-i18n="book.eyebrow"></a></nav>
  <div class="right">
    <div class="lang" id="lang">
      <button type="button" class="lang-cur" id="lang-cur" aria-haspopup="listbox" aria-expanded="false"><span class="dot"></span><span id="lang-cur-t">EN</span><svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><path d="M2 3.5 L5 6.5 L8 3.5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></button>
      <div class="lang-menu" id="lang-menu" role="listbox" hidden><button type="button" role="option" data-lang="en" aria-pressed="true">EN <span>English</span></button><button type="button" role="option" data-lang="de" aria-pressed="false">DE <span>Deutsch</span></button><button type="button" role="option" data-lang="hr" aria-pressed="false">HR <span>Hrvatski</span></button></div>
    </div>
    <a class="pill" href="#booking-sec" data-i18n="book.eyebrow"></a>
  </div>
</div></header>

<section class="wrap hero" id="hero">
  <div>
    <h1 class="h1">Sandra<br>Pudja<span data-i18n="x.h1sub"></span></h1>
    <div class="sub"><span class="mono" data-i18n="hero.role"></span><span class="mono" data-i18n="hero.tag"></span><span class="mono" data-i18n="hero.tag2"></span><span class="mono loc">Berlin · EU</span></div>
    <div class="ctas"><a class="btn primary" href="#booking-sec" data-i18n="book.title"></a><a class="btn" href="#services" data-i18n="x.see"></a></div>
  </div>
  <div>
    <div class="mv" id="mv" aria-hidden="true">
      <div class="pgm" id="pgm">
        <img src="off-duty.jpg" alt="" id="pgm-img" style="opacity:0">
        <div class="feed" id="pgm-feed"></div>
        <span class="safe"></span>
        <div class="ov"><span class="chip"><span class="rec-dot"></span>PGM · <span id="pgm-src">CAM 1</span></span><span class="chip tc" id="pgm-tc">00:00:00:00</span></div>
      </div>
      <div class="pvw" id="wall"></div>
      <div class="deck">
        <div class="meters" id="meters"></div>
        <div class="st"><span class="mono">A1 L/R</span><span class="mono">25 fps · 1080p</span><span class="onair"><span class="rec-dot"></span>ON AIR</span></div>
      </div>
    </div>
    <div class="mv-cap mono" aria-hidden="true"><span data-i18n="x.mvhint"></span><span>MULTIVIEWER · 6 IN</span></div>
  </div>
</section>
<div class="wrap"><div class="stats rv" aria-label="Facts">
  <div class="stat"><b>4</b><span data-i18n="x.s1"></span></div>
  <div class="stat"><b>120+</b><span data-i18n="x.s2"></span></div>
  <div class="stat"><b>48h</b><span data-i18n="x.s3"></span></div>
  <div class="stat"><b>3</b><span data-i18n="x.s4"></span></div>
</div></div>

<section class="sec" id="services"><div class="wrap">
  <div class="sec-head rv"><div><div class="k"><span class="mono">CH 02</span><i></i><span class="mono" data-i18n="svc.eyebrow"></span></div><h2 data-i18n="svc.title"></h2></div><p data-i18n="svc.lede"></p></div>
  <div class="cams rv" id="cams">
    <button class="cam" type="button" aria-expanded="false"><span class="art"><svg class="art-live" viewBox="0 0 260 180" preserveAspectRatio="xMidYMin meet" aria-hidden="true">
<g transform="translate(18,70)"><rect class="fg wv" x="0" y="26" width="3" height="8" rx="1"></rect><rect class="fg wv" x="7" y="22" width="3" height="16" rx="1"></rect><rect class="fg wv" x="14" y="16" width="3" height="28" rx="1"></rect><rect class="fg wv" x="21" y="10" width="3" height="40" rx="1"></rect><rect class="fg wv" x="28" y="19" width="3" height="22" rx="1"></rect><rect class="fg wv" x="35" y="13" width="3" height="34" rx="1"></rect><rect class="fg wv" x="42" y="4" width="3" height="52" rx="1"></rect><rect class="fg wv" x="49" y="15" width="3" height="30" rx="1"></rect><rect class="fg wv" x="56" y="21" width="3" height="18" rx="1"></rect><rect class="fg wv" x="63" y="9" width="3" height="42" rx="1"></rect><rect class="fg wv" x="70" y="2" width="3" height="56" rx="1"></rect><rect class="fg wv" x="77" y="12" width="3" height="36" rx="1"></rect><rect class="fg wv" x="84" y="18" width="3" height="24" rx="1"></rect><rect class="fg wv" x="91" y="23" width="3" height="14" rx="1"></rect><rect class="fg wv" x="98" y="15" width="3" height="30" rx="1"></rect><rect class="fg wv" x="105" y="7" width="3" height="46" rx="1"></rect><rect class="fg wv" x="112" y="16" width="3" height="28" rx="1"></rect><rect class="fg wv" x="119" y="24" width="3" height="12" rx="1"></rect><rect class="fg wv" x="126" y="20" width="3" height="20" rx="1"></rect><rect class="fg wv" x="133" y="11" width="3" height="38" rx="1"></rect><rect class="fg wv" x="140" y="5" width="3" height="50" rx="1"></rect><rect class="fg wv" x="147" y="14" width="3" height="32" rx="1"></rect><rect class="fg wv" x="154" y="22" width="3" height="16" rx="1"></rect><rect class="fg wv" x="161" y="17" width="3" height="26" rx="1"></rect><rect class="fg wv" x="168" y="8" width="3" height="44" rx="1"></rect><rect class="fg wv" x="175" y="19" width="3" height="22" rx="1"></rect><rect class="fg wv" x="182" y="25" width="3" height="10" rx="1"></rect></g>
<rect class="ln" x="18" y="22" width="52" height="18" rx="9"></rect><circle class="rd onair" cx="30" cy="31" r="3"></circle><text x="38" y="34" style="fill:var(--fg)">ON AIR</text>
<text x="150" y="34">LIVE · 00:00:00:00</text>
<g class="sweep"><line class="hi" x1="18" y1="60" x2="18" y2="110"></line></g>
<path class="ln" d="M18 130 H216 M18 144 H120"></path>
</svg></span><span class="top"><span class="mono">CAM 1</span><span class="tally"></span></span><h3 data-i18n="svc.1.t"></h3><p data-i18n="svc.1.d"></p><p class="more" data-i18n="svc.1.m"></p><span class="hint" data-i18n="svc.hint"></span></button>
    <button class="cam" type="button" aria-expanded="false"><span class="art"><svg class="art-tv" viewBox="0 0 260 180" preserveAspectRatio="xMidYMin meet" aria-hidden="true">
<g class="m1"><rect class="ln" x="18" y="34" width="56" height="38" rx="2"></rect><g class="bar"><rect x="20" y="36" width="7" height="34" fill="#c8c8c0" opacity=".5"></rect><rect x="27" y="36" width="7" height="34" fill="#c9c23a" opacity=".5"></rect><rect x="34" y="36" width="7" height="34" fill="#3dbdb0" opacity=".5"></rect><rect x="41" y="36" width="7" height="34" fill="#3f9a44" opacity=".5"></rect><rect x="48" y="36" width="7" height="34" fill="#b33f9e" opacity=".5"></rect><rect x="55" y="36" width="7" height="34" fill="#c43a36" opacity=".5"></rect><rect x="62" y="36" width="10" height="34" fill="#2f3fb0" opacity=".5"></rect></g></g>
<g class="m2"><rect class="ln" x="80" y="34" width="56" height="38" rx="2"></rect><text x="94" y="57">CAM 2</text></g>
<g class="m3"><rect class="ln" x="142" y="34" width="56" height="38" rx="2"></rect><text x="156" y="57">CAM 3</text></g>
<circle class="rd tl" cx="70" cy="30" r="2.2"></circle>
<rect class="ln" x="18" y="80" width="180" height="22" rx="2"></rect><text x="24" y="94">PGM</text><text x="150" y="94">00:12:04:18</text>
<path class="ln" d="M18 120 H198 M18 134 H120 M18 148 H160"></path>
</svg></span><span class="top"><span class="mono">CAM 2</span><span class="tally"></span></span><h3 data-i18n="svc.2.t"></h3><p data-i18n="svc.2.d"></p><p class="more" data-i18n="svc.2.m"></p><span class="hint" data-i18n="svc.hint"></span></button>
    <button class="cam" type="button" aria-expanded="false"><span class="art"><svg class="art-org" viewBox="0 0 260 180" preserveAspectRatio="xMidYMin meet" aria-hidden="true">
<text x="18" y="28" style="fill:var(--fg)">PLAN · THIS WEEK</text><text x="196" y="28">MON</text>
<path class="ln" d="M18 36 H230"></path>
<g class="rows">
<g class="row"><text x="18" y="54">09:00</text><rect class="fg" x="62" y="47" width="70" height="8" rx="1" opacity=".6"></rect><text x="150" y="54">VENDORS</text></g>
<g class="row"><text x="18" y="72">10:30</text><rect class="fg" x="62" y="65" width="100" height="8" rx="1" opacity=".6"></rect><text x="175" y="72">CONTRACTS</text></g>
<g class="row"><text x="18" y="90">12:00</text><rect class="fg" x="62" y="83" width="54" height="8" rx="1" opacity=".6"></rect><text x="150" y="90">TEAM SYNC</text></g>
<g class="row"><text x="18" y="108">14:00</text><rect class="fg" x="62" y="101" width="120" height="8" rx="1" opacity=".6"></rect><text x="190" y="108">REPORT</text></g>
<g class="row"><text x="18" y="126">16:00</text><rect class="fg" x="62" y="119" width="80" height="8" rx="1" opacity=".6"></rect><text x="150" y="126">DEADLINE</text></g>
</g>
<rect class="ln" x="206" y="44" width="16" height="16" rx="3"></rect><path class="hi chk" d="M209 52 L213 56 L220 47"></path>
<path class="ln" d="M18 140 H230"></path>
</svg></span><span class="top"><span class="mono">CAM 3</span><span class="tally"></span></span><h3 data-i18n="svc.3.t"></h3><p data-i18n="svc.3.d"></p><p class="more" data-i18n="svc.3.m"></p><span class="hint" data-i18n="svc.hint"></span></button>
    <button class="cam" type="button" aria-expanded="false"><span class="art"><svg class="art-hand" viewBox="0 0 260 180" preserveAspectRatio="xMidYMin meet" aria-hidden="true">
<text x="18" y="28" style="fill:var(--fg)">TO DO · TODAY</text><circle cx="200" cy="25.5" r="2.5" style="fill:var(--rec)"></circle><text x="207" y="28">ON IT</text>
<path class="ln" d="M18 35 H230"></path>
<g class="r r1"><rect class="ln" x="18" y="43" width="9" height="9" rx="2"></rect><path class="hi tk" pathLength="1" d="M19.8 47.5 L22.2 50 L26 44.5"></path><text x="36" y="51">BOOK FLIGHTS</text><path class="hi st" pathLength="1" d="M34 47.5 H95"></path></g>
<g class="r r2"><rect class="ln" x="18" y="61" width="9" height="9" rx="2"></rect><path class="hi tk" pathLength="1" d="M19.8 65.5 L22.2 68 L26 62.5"></path><text x="36" y="69">CALL THE VENUE</text><path class="hi st" pathLength="1" d="M34 65.5 H105"></path></g>
<g class="r r3"><rect class="ln" x="18" y="79" width="9" height="9" rx="2"></rect><path class="hi tk" pathLength="1" d="M19.8 83.5 L22.2 86 L26 80.5"></path><text x="36" y="87">CHASE SUPPLIER</text><path class="hi st" pathLength="1" d="M34 83.5 H105"></path></g>
<g class="r r4"><rect class="ln" x="18" y="97" width="9" height="9" rx="2"></rect><path class="hi tk" pathLength="1" d="M19.8 101.5 L22.2 104 L26 98.5"></path><text x="36" y="105">FIND A GIFT</text><path class="hi st" pathLength="1" d="M34 101.5 H90"></path></g>
<g class="r r5"><rect class="ln" x="18" y="115" width="9" height="9" rx="2"></rect><path class="hi tk" pathLength="1" d="M19.8 119.5 L22.2 122 L26 116.5"></path><text x="36" y="123">MOVE 3PM MEETING</text><path class="hi st" pathLength="1" d="M34 119.5 H115"></path></g>
<path class="ln" d="M18 140 H230"></path>
</svg></span><span class="top"><span class="mono">CAM 4</span><span class="tally"></span></span><h3 data-i18n="svc.4.t"></h3><p data-i18n="svc.4.d"></p><p class="more" data-i18n="svc.4.m"></p><span class="hint" data-i18n="svc.hint"></span></button>
  </div>
</div></section>

<section class="sec" id="way"><div class="wrap">
  <div class="sec-head rv"><div><div class="k"><span class="mono">CH 03</span><i></i><span class="mono" data-i18n="way.eyebrow"></span></div><h2 data-i18n="way.title"></h2></div><p data-i18n="way.lede"></p></div>
  <div class="stack-hint mono rv"><span data-i18n="x.stackhint"></span><i></i><span>01 → 06</span></div>
  <div class="stack" id="stack">
    <article class="scard" data-i="1" style="--i:0"><span class="tcx"><span class="mono">00:00:00</span><span class="tally"></span></span><div class="n">01<b>/ 06</b></div><div><h3 data-i18n="way.1.t"></h3><p data-i18n="way.1.d"></p><p class="long" data-i18n="way.1.l"></p><div class="scta"><a class="btn primary" href="#booking-sec" data-i18n="way.1.cta"></a><span class="mono" data-i18n="way.1.tag"></span></div></div></article>
    <article class="scard" data-i="2" style="--i:1"><span class="tcx"><span class="mono">00:12:00</span><span class="tally"></span></span><div class="n">02<b>/ 06</b></div><div><h3 data-i18n="way.2.t"></h3><p data-i18n="way.2.d"></p><p class="long" data-i18n="way.2.l"></p><div class="scta"><a class="btn primary" href="#booking-sec" data-i18n="way.2.cta"></a><span class="mono" data-i18n="way.2.tag"></span></div></div></article>
    <article class="scard" data-i="3" style="--i:2"><span class="tcx"><span class="mono">00:24:00</span><span class="tally"></span></span><div class="n">03<b>/ 06</b></div><div><h3 data-i18n="way.3.t"></h3><p data-i18n="way.3.d"></p><p class="long" data-i18n="way.3.l"></p><div class="scta"><a class="btn primary" href="#booking-sec" data-i18n="way.3.cta"></a><span class="mono" data-i18n="way.3.tag"></span></div></div></article>
    <article class="scard" data-i="4" style="--i:3"><span class="tcx"><span class="mono">00:36:00</span><span class="tally"></span></span><div class="n">04<b>/ 06</b></div><div><h3 data-i18n="way.4.t"></h3><p data-i18n="way.4.d"></p><p class="long" data-i18n="way.4.l"></p><div class="scta"><a class="btn primary" href="#booking-sec" data-i18n="way.4.cta"></a><span class="mono" data-i18n="way.4.tag"></span></div></div></article>
    <article class="scard" data-i="5" style="--i:4"><span class="tcx"><span class="mono">00:48:00</span><span class="tally"></span></span><div class="n">05<b>/ 06</b></div><div><h3 data-i18n="way.5.t"></h3><p data-i18n="way.5.d"></p><p class="long" data-i18n="way.5.l"></p><div class="scta"><a class="btn primary" href="#booking-sec" data-i18n="way.5.cta"></a><span class="mono" data-i18n="way.5.tag"></span></div></div></article>
    <article class="scard" data-i="6" style="--i:5"><span class="tcx"><span class="mono">00:60:00</span><span class="tally"></span></span><div class="n">06<b>/ 06</b></div><div><h3 data-i18n="way.6.t"></h3><p data-i18n="way.6.d"></p><p class="long" data-i18n="way.6.l"></p><div class="scta"><a class="btn primary" href="#booking-sec" data-i18n="way.6.cta"></a><span class="mono" data-i18n="way.6.tag"></span></div></div></article>
  </div>
  <div class="stack-end"></div>
  <div class="way-cta rv"><div><h3 data-i18n="way.cta.t"></h3><p data-i18n="way.cta.d"></p></div><div class="ctas"><a class="btn primary" href="#booking-sec" data-i18n="book.title"></a><a class="btn" href="#services" data-i18n="x.see"></a></div></div>
</div></section>

<section class="sec" id="booking-sec"><div class="wrap">
  <div class="sec-head rv"><div><div class="k"><span class="mono">CH 04</span><i></i><span class="mono" data-i18n="book.eyebrow"></span></div><h2 data-i18n="book.title"></h2></div><p data-i18n="book.lede"></p></div>
  <div class="book rv">
    <div class="card">
      <form id="booking" novalidate>
        <div class="row2">
          <div class="field"><label for="f-name" data-i18n="book.name"></label><input id="f-name" name="name" type="text" autocomplete="name" placeholder="Your name"><span class="err" data-i18n="book.err.name"></span></div>
          <div class="field"><label for="f-email" data-i18n="book.email"></label><input id="f-email" name="email" type="email" autocomplete="email" placeholder="name@company.com"><span class="err" data-i18n="book.err.email"></span></div>
        </div>
        <div class="field"><label for="f-type" data-i18n="book.type"></label><select id="f-type" name="type"><option value="live" data-i18n="svc.1.t"></option><option value="media" data-i18n="svc.2.t"></option><option value="ops" data-i18n="svc.3.t"></option><option value="hand" data-i18n="svc.4.t"></option></select></div>
        <div class="field"><label for="f-msg" data-i18n="book.msg"></label><textarea id="f-msg" name="message" placeholder="Three sentences are enough."></textarea><span class="err" data-i18n="book.err.msg"></span></div>
        <button class="btn primary" type="submit" style="justify-self:start"><span class="rec-dot" style="background:var(--bg);animation:none"></span><span data-i18n="book.send"></span></button>
        <p class="mail-line"><span data-i18n="book.or"></span> <code id="mail-addr">hello@sandrapudja.com</code> <button type="button" id="copy-mail" data-i18n="book.copy"></button></p>
        <div class="sent" id="sent"></div><input type="text" name="website" id="f-hp" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;opacity:0" aria-hidden="true">
      </form>
    </div>
    <div class="live" aria-hidden="true">
      <div id="live-slate"></div>
      <span class="tag"><span class="rec-dot"></span>Live</span>
      <span class="tc2" id="live-tc">00:00:00:00</span>
      <div class="foot"><b data-i18n="book.status"></b><span data-i18n="x.livesub"></span></div>
    </div>
  </div>
</div></section>

<footer><div class="wrap">
  <div class="fgrid" id="fgrid">
    <div><h4 data-i18n="f.services"></h4><ul><li><a href="tv-production.php" data-fs="tv-production">TV production</a></li><li><a href="live-event-production.php" data-fs="live-event-production">Live & event production</a></li><li><a href="shoot-organisation.php" data-fs="shoot-organisation">Shoot organisation & logistics</a></li><li><a href="right-hand.php" data-fs="right-hand">Your right hand</a></li></ul></div>
    <div><h4 data-i18n="f.local"></h4><ul><li><a href="tv-producer-berlin.php" data-fs="tv-producer-berlin">TV producer in Berlin</a></li></ul></div>
    <div><h4 data-i18n="f.contact"></h4><ul><li><code style="font-family:var(--font-mono);font-size:13px;color:var(--muted)">hello@sandrapudja.com</code></li><li><a href="https://www.instagram.com/" target="_blank" rel="noopener">Instagram</a></li><li><a href="https://www.linkedin.com/" target="_blank" rel="noopener">LinkedIn</a></li></ul></div>
    <div><h4 data-i18n="f.about"></h4><p class="fabout" data-i18n="f.abouttxt"></p></div>
  </div>
  <div class="fbot"><span class="mono"><span data-i18n="end.title"></span> · <span id="end-year">2026</span></span><span class="mono">Sandra Pudja · <span data-i18n="hero.role"></span> · Berlin</span></div>
</div></footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
(function(){
  var MAIL = "hello@sandrapudja.com";
  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var touch = window.matchMedia("(hover: none)").matches;
  document.documentElement.classList.add("js");
  var T = {
    hr:{ "intro.lbl":"klikni za preskakanje","hero.role":"producentica","hero.tag":"projektna podrška","hero.tag2":"istraživanje i pronalaženje","hero.scroll":"Scroll",
      "svc.eyebrow":"Usluge","svc.cams":"4 kamere · sve uključene","svc.title":"Što radim","svc.lede":"Četiri načina na koja možemo surađivati. Odaberi jedan ili mi reci o čemu se radi.","svc.hint":"Klik za detalje",
      "svc.1.t":"Live i event produkcija","svc.1.d":"Sport, koncerti, summiti, breaking news. Uživo, na vrijeme, bez drugog take-a.","svc.1.m":"120+ live produkcija i 100+ livestreamova godišnje za međunarodne video agencije u Berlinu i Abu Dhabiju, s field producentima diljem svijeta. Svakodnevica: brze odluke, koordinacija internih timova i B2B partnera, i raspored koji se mijenja iz sata u sat. Ja to planiram, složim ekipu i držim u eteru.",
      "svc.2.t":"Medijski i creator projekti","svc.2.d":"Od ideje i pitcha do isporuke. Kampanje, sadržaj, creatori i radionice.","svc.2.m":"Kao Executive Producer za EU medijske i poslovne projekte radim s agencijama koje podržavaju creatore: kampanje, suradnje i radionice o sadržaju. Iza toga su tri godine vlastite digitalne agencije, u kojoj su jednokratni projekti prerasli u dugoročne ugovore, i početak kao novinarka u najčitanijim hrvatskim medijima. Ponude, budžeti, creatori, sadržaj i pitch deckovi.",
      "svc.3.t":"Operativa i podrška projektima","svc.3.d":"Imaš projekt ili tim. Ja se brinem da je sve organizirano i da ide naprijed.","svc.3.m":"Operativa za dostavnog partnera globalne e-commerce kompanije: ugovori o radu i s dobavljačima, izvještaji i komunikacija u timu. Rasporedi smjena za 30+ međunarodnih kolega. Educirana sam za analitiku podataka, pa izvještaji pokazuju gdje stvari stvarno stoje. Procesi, rasporedi, ugovori, dobavljači, dashboardi.",
      "svc.4.t":"Tvoja desna ruka","svc.4.d":"Poslovna i osobna podrška, bez novog zaposlenja.","svc.4.m":"Kalendar, mailovi, putovanja, rezervacije, follow-upovi, istraživanje i sve ono „samo me podsjeti“. Za jedan zadatak, jedan dan ili dugoročno. Ti mi predaš, ja se pobrinem da sve ide dalje.",
      "way.eyebrow":"Kako radim","way.seq":"Sekvenca 01 · 6 klipova","way.title":"Kako radim","way.lede":"Šest pravila po kojima radim: na setu, u uredu i u tvom inboxu.",
      "way.1.t":"Plan prije nego krene","way.1.d":"Svi imaju plan prije prvog dana.",
      "way.2.t":"Plan B ima plan C","way.2.d":"Svaka lokacija, dobavljač i rok ima rezervu.",
      "way.3.t":"Mirna kad postane glasno","way.3.d":"Brze odluke, bez drame.",
      "way.4.t":"Svaki zadatak ima vlasnika","way.4.d":"Nema „netko će“. Ime i datum.",
      "way.5.t":"Ljudi prvo","way.5.d":"Projekti se oslanjaju na ljude.",
      "way.6.t":"Ništa ne ostaje visjeti","way.6.d":"Pratim sve dok nije gotovo.",
      "book.eyebrow":"Booking","book.status":"Otvoreno za nove projekte","book.title":"Rezerviraj me","book.lede":"Napiši što trebaš i do kada. Odgovaram unutar 48 sati.",
      "book.name":"Ime i prezime","book.email":"Tvoj e-mail","book.type":"Vrsta projekta","book.date":"Okvirni datum","book.msg":"O čemu se radi","book.send":"Pošalji upit","book.or":"ili direktno na","book.copy":"Kopiraj","book.copied":"Kopirano",
      "book.err.name":"Upiši ime.","book.err.email":"Upiši ispravan e-mail.","book.err.msg":"Napiši barem rečenicu.",
      "book.sent":"Otvara se tvoj mail program s ispunjenom porukom. Ako se nije otvorio, kopiraj adresu iznad i pošalji ručno.",
      "book.sending":"Šaljem…","book.ok":"Poslano. Odgovaram unutar 48 sati — kopiju dobivaš na mail.","book.fail":"Trenutno ne mogu poslati. Piši direktno na hello@sandrapudja.com.","book.subject":"Booking upit","book.body.type":"Vrsta projekta","book.body.date":"Okvirni datum","book.body.from":"Od",
      "end.eyebrow":"Kraj programa","end.title":"End of transmission","end.col":"Sandra Pudja · TV producentica · Berlin" },
    en:{ "intro.lbl":"click to skip","hero.role":"producer","hero.tag":"project support","hero.tag2":"research & sourcing","hero.scroll":"Scroll",
      "svc.eyebrow":"Services","svc.cams":"4 cameras · all live","svc.title":"What I do","svc.lede":"Four ways to work with me. Pick one, or tell me what's going on.","svc.hint":"Click for details",
      "svc.1.t":"Live & event production","svc.1.d":"Sports, concerts, summits, breaking news. Live, on time, no second take.","svc.1.m":"120+ live productions and 100+ livestreams a year for international video agencies in Berlin and Abu Dhabi, with field producers all over the world. Daily life was fast decisions, in-house teams and B2B partners to coordinate, and a schedule that changed by the hour. I plan it, staff it and keep it on air.",
      "svc.2.t":"Media & creator projects","svc.2.d":"From idea and pitch to delivery. Campaigns, content, creators and workshops.","svc.2.m":"As Executive Producer for EU media and business projects, I work with agencies that support creators: campaigns, collaborations and content workshops. Behind it: three years running my own digital agency, where one-off projects grew into long-term contracts, and a start as a journalist at Croatia's most-read news outlets. Proposals, budgets, creators, content and pitch decks.",
      "svc.3.t":"Operations & project support","svc.3.d":"You have a project or a team. I keep it organised and moving.","svc.3.m":"Operations for a delivery partner of a global e-commerce company: employee and vendor contracts, reporting and team communication. Shift schedules for 30+ international colleagues. Trained in data analytics, so the reporting shows where things actually stand. Processes, schedules, contracts, vendors, dashboards.",
      "svc.4.t":"Your right hand","svc.4.d":"Executive and personal support, without hiring anyone.","svc.4.m":"Calendar, emails, travel, bookings, follow-ups, research and the \"don't let me forget this\" things. For one task, one day or ongoing. You hand it over, I keep it moving.",
      "way.eyebrow":"How I work","way.seq":"Sequence 01 · 6 clips","way.title":"How I work","way.lede":"Six rules I work by: on set, in the office and in your inbox.",
      "way.1.t":"Plan before it moves","way.1.d":"Everyone has the plan before day one.",
      "way.2.t":"Plan B has a plan C","way.2.d":"Every venue, supplier and deadline has a backup.",
      "way.3.t":"Calm when it gets loud","way.3.d":"Fast decisions, no drama.",
      "way.4.t":"Every task has an owner","way.4.d":"No \"someone will do it\". A name and a date.",
      "way.5.t":"People first","way.5.d":"Projects run on people.",
      "way.6.t":"No loose ends","way.6.d":"I follow up until it's finished.",
      "book.eyebrow":"Booking","book.status":"Open for new projects","book.title":"Book me","book.lede":"Tell me what you need and by when. I reply within 48 hours.",
      "book.name":"Full name","book.email":"Your e-mail","book.type":"Project type","book.date":"Rough date","book.msg":"What it is about","book.send":"Send request","book.or":"or directly at","book.copy":"Copy","book.copied":"Copied",
      "book.err.name":"Enter your name.","book.err.email":"Enter a valid e-mail.","book.err.msg":"Write at least a sentence.",
      "book.sent":"Your mail app opens with the message filled in. If it did not, copy the address above and send it yourself.",
      "book.sending":"Sending…","book.ok":"Sent. I reply within 48 hours — you also get a copy by e-mail.","book.fail":"Could not send right now. Write directly to hello@sandrapudja.com.","book.subject":"Booking request","book.body.type":"Project type","book.body.date":"Rough date","book.body.from":"From",
      "end.eyebrow":"End of programme","end.title":"End of transmission","end.col":"Sandra Pudja · TV producer · Berlin" },
    de:{ "intro.lbl":"Klick zum Überspringen","hero.role":"Produzentin","hero.tag":"Projektunterstützung","hero.tag2":"Recherche & Sourcing","hero.scroll":"Scrollen",
      "svc.eyebrow":"Leistungen","svc.cams":"4 Kameras · alle live","svc.title":"Was ich mache","svc.lede":"Vier Wege, mit mir zu arbeiten. Such dir einen aus oder erzähl mir, worum es geht.","svc.hint":"Klick für Details",
      "svc.1.t":"Live- & Event-Produktion","svc.1.d":"Sport, Konzerte, Gipfel, Breaking News. Live, pünktlich, ohne zweiten Take.","svc.1.m":"120+ Live-Produktionen und 100+ Livestreams pro Jahr für internationale Videoagenturen in Berlin und Abu Dhabi, mit Field Producern auf der ganzen Welt. Der Alltag: schnelle Entscheidungen, interne Teams und B2B-Partner koordinieren, und ein Zeitplan, der sich stündlich ändert. Ich plane es, stelle die Crew zusammen und halte es auf Sendung.",
      "svc.2.t":"Medien- & Creator-Projekte","svc.2.d":"Von der Idee und dem Pitch bis zur Lieferung. Kampagnen, Content, Creator und Workshops.","svc.2.m":"Als Executive Producer für EU-Medien- und Business-Projekte arbeite ich mit Agenturen, die Creator betreuen: Kampagnen, Kooperationen und Content-Workshops. Dahinter stehen drei Jahre eigene Digitalagentur, in der aus Einzelprojekten langfristige Verträge wurden, und ein Start als Journalistin bei den meistgelesenen kroatischen Nachrichtenmedien. Angebote, Budgets, Creator, Content und Pitch-Decks.",
      "svc.3.t":"Operations & Projektunterstützung","svc.3.d":"Du hast ein Projekt oder ein Team. Ich halte es organisiert und in Bewegung.","svc.3.m":"Operations für einen Lieferpartner eines globalen E-Commerce-Konzerns: Arbeits- und Lieferantenverträge, Reporting und Teamkommunikation. Schichtpläne für 30+ internationale Kolleginnen und Kollegen. Ausgebildet in Datenanalyse, damit das Reporting zeigt, wo die Dinge wirklich stehen. Prozesse, Zeitpläne, Verträge, Lieferanten, Dashboards.",
      "svc.4.t":"Deine rechte Hand","svc.4.d":"Business- und persönliche Unterstützung, ohne jemanden einzustellen.","svc.4.m":"Kalender, E-Mails, Reisen, Buchungen, Follow-ups, Recherche und alles, was unter „erinner mich bitte daran“ fällt. Für eine Aufgabe, einen Tag oder dauerhaft. Du gibst es ab, ich halte es in Bewegung.",
      "way.eyebrow":"Wie ich arbeite","way.seq":"Sequenz 01 · 6 Clips","way.title":"Wie ich arbeite","way.lede":"Sechs Regeln, nach denen ich arbeite: am Set, im Büro und in deinem Postfach.",
      "way.1.t":"Planen, bevor es losgeht","way.1.d":"Alle haben den Plan vor dem ersten Tag.",
      "way.2.t":"Plan B hat einen Plan C","way.2.d":"Jede Location, jeder Lieferant, jede Deadline hat eine Reserve.",
      "way.3.t":"Ruhig, wenn es laut wird","way.3.d":"Schnelle Entscheidungen, kein Drama.",
      "way.4.t":"Jede Aufgabe hat einen Besitzer","way.4.d":"Kein „macht schon jemand“. Ein Name und ein Datum.",
      "way.5.t":"Menschen zuerst","way.5.d":"Projekte laufen über Menschen.",
      "way.6.t":"Keine losen Enden","way.6.d":"Ich bleibe dran, bis es fertig ist.",
      "book.eyebrow":"Booking","book.status":"Offen für neue Projekte","book.title":"Buch mich","book.lede":"Schreib, was du brauchst und bis wann. Ich antworte innerhalb von 48 Stunden.",
      "book.name":"Vor- und Nachname","book.email":"Deine E-Mail","book.type":"Projektart","book.date":"Ungefähres Datum","book.msg":"Worum geht es","book.send":"Anfrage senden","book.or":"oder direkt an","book.copy":"Kopieren","book.copied":"Kopiert",
      "book.err.name":"Namen eingeben.","book.err.email":"Gültige E-Mail eingeben.","book.err.msg":"Mindestens einen Satz schreiben.",
      "book.sent":"Dein Mailprogramm öffnet sich mit der ausgefüllten Nachricht. Falls nicht, kopiere die Adresse oben und sende sie selbst.",
      "book.sending":"Wird gesendet…","book.ok":"Gesendet. Ich antworte innerhalb von 48 Stunden — du bekommst eine Kopie per E-Mail.","book.fail":"Senden gerade nicht möglich. Schreib direkt an hello@sandrapudja.com.","book.subject":"Booking-Anfrage","book.body.type":"Projektart","book.body.date":"Ungefähres Datum","book.body.from":"Von",
      "end.eyebrow":"Sendeschluss","end.title":"End of transmission","end.col":"Sandra Pudja · TV-Produzentin · Berlin" }
  };

  var EXTRA = { en:{"x.slate":"Your next project","x.h1sub":"Give me your list. I'll get it done.","x.see":"See services","x.s1":"areas of work","x.s2":"live productions","x.s3":"to reply to a request","x.s4":"languages on set","x.livesub":"Live, projects, operations. Berlin and remote.","x.claim":"The TV producer who keeps everything under control.","x.claimsub":"Studio, live and location. Call sheet before coffee, plan B has a plan C, and nobody on set asks \"what now?\"","x.grow":"grows as you scroll","x.follow":"follows you","x.mvhint":"Hover a preview to take it to programme","x.stackhint":"Scroll — each rule stacks on the last","f.services":"Services","f.local":"Local","f.contact":"Contact","f.about":"About me","f.abouttxt":"I'm Sandra Pudja, a freelance TV producer based in Berlin, working in English, German and Croatian on studio, live and location productions across Europe.","way.1.l":"Schedules, owners and deadlines are clear before anything starts, whether it's a live show, a campaign or your week. For 30+ colleagues across time zones, the schedule was the one thing everyone trusted.","way.1.cta":"Send me your dates","way.1.tag":"Planning","way.2.l":"Breaking news doesn't wait, and neither do clients. I think through what could go wrong before it does, so when something breaks, the next step is already there.","way.2.cta":"Tell me what could go wrong","way.2.tag":"Risk","way.3.l":"Live production taught me to decide quickly and calmly: what, who, when, next. It works the same in a launch week or an overflowing inbox.","way.3.cta":"Book me for a live","way.3.tag":"Pressure","way.4.l":"Every item has a person and a deadline next to it, and that person knows it. In-house teams, B2B partners, freelancers and creators all know what's theirs.","way.4.cta":"Start with one task","way.4.tag":"Clarity","way.5.l":"Clients, partners, crews and creators: everyone knows who to ask, and nobody is left waiting. That's why one-off projects at my agency turned into long-term contracts.","way.5.cta":"Let's talk","way.5.tag":"Relationships","way.6.l":"I chase what needs chasing, close what's open, and you get a short note when it's done. Then on to the next thing.","way.6.cta":"Start a project","way.6.tag":"Delivery","way.cta.t":"Sounds like what you need?","way.cta.d":"Write three sentences about what needs doing and by when. I reply within 48 hours."},
                hr:{"x.slate":"Tvoj sljedeći projekt","x.h1sub":"Daj mi svoj popis. Ja ću ga riješiti.","x.see":"Pogledaj usluge","x.s1":"područja rada","x.s2":"live produkcija","x.s3":"za odgovor na upit","x.s4":"jezika na setu","x.livesub":"Live, projekti, operativa. Berlin i remote.","x.claim":"TV producentica koja sve drži pod kontrolom.","x.claimsub":"Studio, live i teren. Call sheet prije kave, plan B ima plan C, i nitko na setu ne pita „što sad?“","x.grow":"raste na scroll","x.follow":"prati te","x.mvhint":"Pređi mišem preko previewa da ga pustiš u program","x.stackhint":"Scrollaj — svako pravilo se slaže na prethodno","f.services":"Usluge","f.local":"Lokalno","f.contact":"Kontakt","f.about":"O meni","f.abouttxt":"Ja sam Sandra Pudja, samostalna TV producentica iz Berlina. Radim na engleskom, njemačkom i hrvatskom na studijskim, live i terenskim produkcijama diljem Europe.","way.1.l":"Rasporedi, odgovorne osobe i rokovi jasni su prije nego što išta krene, bilo da je riječ o live emisiji, kampanji ili tvom tjednu. Za 30+ kolega u različitim vremenskim zonama raspored je bio ono čemu su svi vjerovali.","way.1.cta":"Pošalji mi datume","way.1.tag":"Planiranje","way.2.l":"Breaking news ne čeka, a ne čekaju ni klijenti. Unaprijed razmislim što može poći po zlu, pa kad nešto pukne, sljedeći korak je već spreman.","way.2.cta":"Reci mi što može poći po zlu","way.2.tag":"Rizik","way.3.l":"Live produkcija naučila me da odlučujem brzo i mirno: što, tko, kad, dalje. Isto funkcionira u tjednu lansiranja ili u pretrpanom inboxu.","way.3.cta":"Rezerviraj me za live","way.3.tag":"Pritisak","way.4.l":"Uz svaku stavku stoje osoba i rok, i ta osoba to zna. Interni timovi, B2B partneri, freelanceri i creatori znaju što je njihovo.","way.4.cta":"Počni s jednim zadatkom","way.4.tag":"Jasnoća","way.5.l":"Klijenti, partneri, ekipe i creatori: svatko zna koga pitati i nitko ne ostaje čekati. Zato su jednokratni projekti u mojoj agenciji prerasli u dugoročne ugovore.","way.5.cta":"Razgovarajmo","way.5.tag":"Odnosi","way.6.l":"Požurujem ono što treba požuriti, zatvaram ono što je otvoreno, a kad je gotovo, dobiješ kratku poruku. Onda idemo na sljedeće.","way.6.cta":"Pokreni projekt","way.6.tag":"Isporuka","way.cta.t":"Zvuči kao ono što trebaš?","way.cta.d":"Napiši tri rečenice o tome što treba napraviti i do kada. Odgovaram unutar 48 sati."},
                de:{"x.slate":"Dein nächstes Projekt","x.h1sub":"Gib mir deine Liste. Ich erledige sie.","x.see":"Leistungen ansehen","x.s1":"Arbeitsbereiche","x.s2":"Live-Produktionen","x.s3":"bis zur Antwort","x.s4":"Sprachen am Set","x.livesub":"Live, Projekte, Operations. Berlin und remote.","x.claim":"Die TV-Produzentin, die alles unter Kontrolle hält.","x.claimsub":"Studio, Live und Außendreh. Call Sheet vor dem Kaffee, Plan B hat einen Plan C, und niemand am Set fragt „und jetzt?“","x.grow":"wächst beim Scrollen","x.follow":"folgt dir","x.mvhint":"Fahre über eine Vorschau, um sie auf Programm zu schalten","x.stackhint":"Scrollen — jede Regel stapelt sich auf die vorige","f.services":"Leistungen","f.local":"Lokal","f.contact":"Kontakt","f.about":"Über mich","f.abouttxt":"Ich bin Sandra Pudja, freie TV-Produzentin mit Sitz in Berlin, und arbeite auf Deutsch, Englisch und Kroatisch an Studio-, Live- und Außenproduktionen in ganz Europa.","way.1.l":"Zeitpläne, Zuständigkeiten und Deadlines stehen fest, bevor etwas startet, ob Live-Show, Kampagne oder deine Woche. Für 30+ Kolleginnen und Kollegen über Zeitzonen hinweg war der Zeitplan das, worauf sich alle verlassen haben.","way.1.cta":"Schick mir deine Termine","way.1.tag":"Planung","way.2.l":"Breaking News wartet nicht, Kunden auch nicht. Ich denke vorher durch, was schiefgehen kann, damit der nächste Schritt schon bereitsteht, wenn etwas kaputtgeht.","way.2.cta":"Sag mir, was schiefgehen könnte","way.2.tag":"Risiko","way.3.l":"Live-Produktion hat mir beigebracht, schnell und ruhig zu entscheiden: was, wer, wann, weiter. Das funktioniert genauso in einer Launch-Woche oder bei einem vollen Postfach.","way.3.cta":"Für ein Live buchen","way.3.tag":"Druck","way.4.l":"Neben jedem Punkt stehen eine Person und eine Deadline, und diese Person weiß es. Interne Teams, B2B-Partner, Freelancer und Creator wissen, was ihres ist.","way.4.cta":"Mit einer Aufgabe anfangen","way.4.tag":"Klarheit","way.5.l":"Kunden, Partner, Crews und Creator: Alle wissen, wen sie fragen können, und niemand wartet. Deshalb wurden aus Einzelprojekten in meiner Agentur langfristige Verträge.","way.5.cta":"Lass uns reden","way.5.tag":"Beziehungen","way.6.l":"Ich hake nach, wo nachgehakt werden muss, schließe ab, was offen ist, und du bekommst eine kurze Nachricht, wenn es erledigt ist. Dann zum nächsten Punkt.","way.6.cta":"Projekt starten","way.6.tag":"Lieferung","way.cta.t":"Klingt nach dem, was du brauchst?","way.cta.d":"Schreib drei Sätze darüber, was zu tun ist und bis wann. Ich antworte innerhalb von 48 Stunden."} };
  Object.keys(EXTRA).forEach(function(l){ Object.keys(EXTRA[l]).forEach(function(k){ T[l][k] = EXTRA[l][k]; }); });
  var lang = "en";
  try{ var s = localStorage.getItem("sp-lang2"); if (s && T[s]) lang = s; }catch(e){}
  function applyLang(l){
    lang = l; document.documentElement.lang = l;
    document.querySelectorAll("[data-i18n]").forEach(function(el){ var k = el.getAttribute("data-i18n"); if (T[l][k] != null) el.textContent = T[l][k]; });
    document.querySelectorAll(".lang-menu button").forEach(function(b){ b.setAttribute("aria-pressed", b.getAttribute("data-lang")===l ? "true":"false"); });
    document.getElementById("lang-cur-t").textContent = l.toUpperCase();
    var FS = {"en": {"tv-production": "TV production", "live-event-production": "Live & event production", "shoot-organisation": "Shoot organisation & logistics", "right-hand": "Your right hand", "tv-producer-berlin": "TV producer in Berlin"}, "de": {"tv-production": "TV-Produktion", "live-event-production": "Live- & Event-Produktion", "shoot-organisation": "Drehorganisation & Logistik", "right-hand": "Deine rechte Hand", "tv-producer-berlin": "TV-Produzentin in Berlin"}, "hr": {"tv-production": "TV produkcija", "live-event-production": "Produkcija eventa / live", "shoot-organisation": "Organizacija i logistika snimanja", "right-hand": "Tvoja desna ruka", "tv-producer-berlin": "TV producentica u Berlinu"}};
    document.querySelectorAll("[data-fs]").forEach(function(a){ var k = a.getAttribute("data-fs"); a.textContent = (FS[l]||FS.en)[k]; a.setAttribute("href", "/" + (l==="de" ? "de/" : "") + k + ".php"); });
    updateWay();
    try{ localStorage.setItem("sp-lang2", l); }catch(e){}
  }
  var langCur = document.getElementById("lang-cur"), langMenu = document.getElementById("lang-menu");
  function closeLang(){ langMenu.hidden = true; langCur.setAttribute("aria-expanded","false"); }
  langCur.addEventListener("click", function(e){ e.stopPropagation(); var o = langMenu.hidden; langMenu.hidden = !o; langCur.setAttribute("aria-expanded", o?"true":"false"); });
  document.querySelectorAll(".lang-menu button").forEach(function(b){ b.addEventListener("click", function(){ applyLang(b.getAttribute("data-lang")); closeLang(); }); });
  document.addEventListener("click", function(e){ if (!e.target.closest("#lang")) closeLang(); });
  document.addEventListener("keydown", function(e){ if (e.key === "Escape") closeLang(); });

  function pad(n){ return (n<10?"0":"")+n; }
  function tc(f){ f=Math.max(0,Math.floor(f)); return pad(Math.floor(f/90000))+":"+pad(Math.floor(f/1500)%60)+":"+pad(Math.floor(f/25)%60)+":"+pad(f%25); }
  var BARS = ["#c8c8c0","#c9c23a","#3dbdb0","#3f9a44","#b33f9e","#c43a36","#2f3fb0"];
  function barsHTML(){ return '<span class="bars">'+BARS.map(function(c){ return '<i style="background:'+c+'"></i>'; }).join("")+'</span>'; }
  var noise = document.createElement("canvas"); noise.width=320; noise.height=180; var nctx = noise.getContext("2d"); var nimg = nctx.createImageData(320,180);
  function drawNoise(){ var d=nimg.data; for (var i=0;i<d.length;i+=4){ var r=Math.random(); var v = r<.45 ? 25+Math.random()*45|0 : r<.9 ? 170+Math.random()*85|0 : 110; d[i]=v;d[i+1]=v;d[i+2]=v;d[i+3]=255; } nctx.putImageData(nimg,0,0); }
  var noiseTargets = [], pgmNoiseCtx = null;
  function slateHTML(){ var d=new Date(), dd=pad(d.getDate())+"."+pad(d.getMonth()+1)+"."+d.getFullYear();
    return '<div class="slate"><span class="clap"></span><div class="g"><div class="w"><small>Production</small><b data-i18n="x.slate">'+((T[lang]&&T[lang]["x.slate"])||"Your next project")+'</b></div><div><small>Roll</small><b>A001</b></div><div><small>Scene</small><b>01</b></div><div><small>Take</small><b>1</b></div><div><small>Role</small><b>Producer</b></div><div><small>Date</small><b>'+dd+'</b></div><div><small>Loc</small><b>Berlin</b></div></div></div>'; }
  var PHOTOS = ["off-duty.jpg"];
  var mons = [], photoN = 0;
  function makeMon(m,i){
    var d = document.createElement("div"); d.className = "mon " + (m.k==="live"?"live":m.k==="name"?"name":m.cls||"");
    var lbl = "MON " + pad(i+1), inner = "";
    if (m.k==="slate"){ lbl = "SLATE"; inner = slateHTML(); }
    else if (m.k==="photo"){ photoN++; lbl = m.lbl || ("CAM " + photoN); inner = '<img src="'+PHOTOS[(photoN-1)%PHOTOS.length]+'" alt="" style="--pos:'+m.pos+';--zoom:'+m.z+'">'; }
    else if (m.k==="bars") inner = barsHTML();
    else if (m.k==="name") inner = '<span class="word">'+m.t+'</span>';
    else if (m.k==="tc") inner = '<span class="word">'+tc(1000+i*7331)+'</span>';
    else if (m.k==="live") inner = '<span class="word">On air</span>';
    else if (m.k==="cam") inner = '<span class="word">CAM '+((i%4)+1)+'</span>';
    else if (m.k==="noise") inner = '<canvas width="192" height="120"></canvas>';
    else if (m.k==="nosig"){ d.classList.add("nosig"); inner = '<span class="word">No signal</span>'; }
    d.innerHTML = '<span class="lbl">'+lbl+'</span><span class="tally"></span>'+inner;
    if (i%4===0 || m.k==="photo") d.classList.add("on");
    var c = d.querySelector("canvas"); if (c) noiseTargets.push(c.getContext("2d"));
    return d;
  }
  var last = 0;
  (function tick(t){ if (t - last > 60){ last = t; drawNoise(); noiseTargets.forEach(function(c){ c.imageSmoothingEnabled=false; c.drawImage(noise,0,0,c.canvas.width,c.canvas.height); }); if (pgmNoiseCtx){ pgmNoiseCtx.imageSmoothingEnabled=false; pgmNoiseCtx.drawImage(noise,0,0,640,400); } } requestAnimationFrame(tick); })(0);
  setInterval(function(){ if (reduce || !mons.length) return; var a = mons[Math.random()*mons.length|0]; if (!a.querySelector("img")) a.classList.toggle("on"); }, 1100);


  /* header hud + progress + nav */
  var prog = document.getElementById("progress"), hudTc = document.getElementById("hud-tc"), hudCh = document.getElementById("hud-ch"), liveTc = document.getElementById("live-tc");
  var secs = [["hero","01"],["services","02"],["way","03"],["booking-sec","04"]], links = document.querySelectorAll("#links a");
  function onScroll(){
    var y = window.scrollY, max = document.documentElement.scrollHeight - window.innerHeight;
    prog.style.width = (max>0 ? y/max*100 : 0) + "%";
    hudTc.textContent = tc((max>0 ? y/max : 0) * 25*60*4);
    liveTc.textContent = tc(Date.now()/40 % 90000);
    var cur = "01", curId = "";
    secs.forEach(function(s){ var el = document.getElementById(s[0]); if (el && el.getBoundingClientRect().top < window.innerHeight*0.45){ cur = s[1]; curId = s[0]; } });
    hudCh.textContent = "CH " + cur;
    links.forEach(function(a){ a.classList.toggle("on", a.getAttribute("href") === "#"+curId); });
  }
  window.addEventListener("scroll", onScroll, {passive:true}); onScroll();
  document.querySelectorAll('a[href^="#"]').forEach(function(a){ a.addEventListener("click", function(e){ var el = document.querySelector(a.getAttribute("href")); if (!el) return; e.preventDefault(); window.scrollTo({ top: el.getBoundingClientRect().top + window.scrollY - 80, behavior: reduce?"auto":"smooth" }); }); });

  var io = new IntersectionObserver(function(es){ es.forEach(function(e){ if (e.isIntersecting){ e.target.classList.add("in"); io.unobserve(e.target); } }); }, {threshold:.08});
  document.querySelectorAll(".rv").forEach(function(el){ io.observe(el); });
  document.querySelectorAll(".cam").forEach(function(c){ c.addEventListener("click", function(){ var o = c.classList.toggle("open"); c.setAttribute("aria-expanded", o?"true":"false"); }); });

  var cards = Array.prototype.slice.call(document.querySelectorAll(".scard"));
  function updateWay(){}
  function stackTick(){
    var top = 56 + 24; var vh = window.innerHeight;
    cards.forEach(function(c,i){
      var r = c.getBoundingClientRect();
      var next = cards[i+1]; var pr = next ? Math.min(1, Math.max(0, (vh - next.getBoundingClientRect().top) / (vh*0.8))) : 0;
      /* pr = how far the next card has climbed over this one */
      var sc = 1 - pr*0.05, ty = 0, dim = pr*0.5;
      c.style.transform = "translateY("+ty+"px) scale("+sc+")";
      c.style.filter = "brightness("+(1-dim)+")";
      c.classList.toggle("hot", r.top <= top + 40 && pr < 0.5);
    });
  }
  if (!reduce){ window.addEventListener("scroll", stackTick, {passive:true}); window.addEventListener("resize", stackTick); stackTick(); }
  else { cards.forEach(function(c){ c.classList.add("hot"); }); }
  applyLang(lang);

  /* intro */
  var intro = document.getElementById("intro"), introN = document.getElementById("intro-n"), introBar = document.getElementById("intro-bar"), seen = false, done = false;
  try{ seen = sessionStorage.getItem("sp-x-intro") === "1"; }catch(e){}
  function endIntro(){ if (done) return; done = true; intro.classList.add("off"); document.documentElement.style.overflow = ""; try{ sessionStorage.setItem("sp-x-intro","1"); }catch(e){} setTimeout(function(){ intro.remove(); if (window.ScrollTrigger) ScrollTrigger.refresh(); }, 600); }
  if (reduce || seen) { intro.remove(); }
  else {
    document.documentElement.style.overflow = "hidden";
    var st = ["3","2","1"], si = 0;
    function step(){ if (done) return; if (si < st.length){ introN.textContent = st[si]; introBar.style.transition = "none"; introBar.style.width = "0"; void introBar.offsetWidth; introBar.style.transition = "width .6s linear"; introBar.style.width = "100%"; si++; setTimeout(step, 650); } else { introN.textContent = "On air"; introN.classList.add("air"); setTimeout(endIntro, 600); } }
    setTimeout(step, 200);
    intro.addEventListener("click", endIntro);
  }


  /* booking */
  var form = document.getElementById("booking"), sent = document.getElementById("sent");
  function fieldOf(id){ return document.getElementById(id).closest(".field"); }
  ["f-name","f-email","f-msg"].forEach(function(id){ document.getElementById(id).addEventListener("input", function(){ fieldOf(id).classList.remove("bad"); }); });
  form.addEventListener("submit", function(e){
    e.preventDefault();
    var name = document.getElementById("f-name").value.trim(), email = document.getElementById("f-email").value.trim(), msg = document.getElementById("f-msg").value.trim();
    var sel = document.getElementById("f-type"); var type = sel.options[sel.selectedIndex].textContent; var date = "";
    var ok = true;
    if (!name){ fieldOf("f-name").classList.add("bad"); ok=false; }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)){ fieldOf("f-email").classList.add("bad"); ok=false; }
    if (msg.length < 10){ fieldOf("f-msg").classList.add("bad"); ok=false; }
    if (!ok) return;
    var t = T[lang]; var btn = form.querySelector('button[type="submit"]'); var btnTxt = btn.querySelector('[data-i18n="book.send"]');
    var fd = new FormData(); fd.append("name", name); fd.append("email", email); fd.append("type", sel.value); fd.append("message", msg); fd.append("lang", lang); fd.append("website", document.getElementById("f-hp").value);
    btn.disabled = true; btnTxt.textContent = t["book.sending"]; sent.className = "sent"; sent.textContent = "";
    fetch("/send.php", { method:"POST", body: fd }).then(function(r){ return r.json().catch(function(){ return {ok:false}; }).then(function(j){ return {status:r.status, j:j}; }); })
    .then(function(res){
      btn.disabled = false; btnTxt.textContent = t["book.send"];
      if (res.j && res.j.ok){ sent.className = "sent on ok"; sent.textContent = t["book.ok"]; form.reset(); }
      else {
        var e = res.j && res.j.error;
        if (e === "name"){ fieldOf("f-name").classList.add("bad"); } else if (e === "email"){ fieldOf("f-email").classList.add("bad"); } else if (e === "message"){ fieldOf("f-msg").classList.add("bad"); }
        else { sent.className = "sent on err"; sent.textContent = t["book.fail"]; }
      }
    }).catch(function(){
      btn.disabled = false; btnTxt.textContent = t["book.send"];
      sent.className = "sent on err"; sent.textContent = t["book.fail"];
      var subject = t["book.subject"]+": "+sel.options[sel.selectedIndex].textContent+" — "+name;
      var body = t["book.body.type"]+": "+sel.options[sel.selectedIndex].textContent+"\n"+t["book.body.date"]+": "+(date||"—")+"\n"+t["book.body.from"]+": "+name+" <"+email+">\n\n"+msg;
      try{ window.location.href = "mailto:"+MAIL+"?subject="+encodeURIComponent(subject)+"&body="+encodeURIComponent(body); }catch(err){}
    });
  });
  var copyBtn = document.getElementById("copy-mail");
  copyBtn.addEventListener("click", function(){
    function doneC(){ copyBtn.textContent = T[lang]["book.copied"]; setTimeout(function(){ copyBtn.textContent = T[lang]["book.copy"]; },1600); }
    function fb(){ var r = document.createRange(); r.selectNodeContents(document.getElementById("mail-addr")); var s = window.getSelection(); s.removeAllRanges(); s.addRange(r); doneC(); }
    if (navigator.clipboard && navigator.clipboard.writeText) navigator.clipboard.writeText(MAIL).then(doneC, fb); else fb();
  });
  document.getElementById("end-year").textContent = new Date().getFullYear();


  var wall = document.getElementById("wall"), mv = document.getElementById("mv"), hero = document.getElementById("hero");
  var ls = document.getElementById("live-slate"); if (ls) ls.outerHTML = slateHTML();
  var seq = [ {k:"slate",src:"SLATE"}, {k:"noise",src:"CAM 2"}, {k:"photo",pos:"62% 30%",z:1.0,cls:"",src:"OFF DUTY",lbl:"OFF DUTY"}, {k:"nosig",src:"CAM 4"}, {k:"bars",src:"BARS"}, {k:"live",src:"CLOCK"} ];
  var pgmImg = document.getElementById("pgm-img"), pgmFeed = document.getElementById("pgm-feed"), pgmSrc = document.getElementById("pgm-src"), pgmTc = document.getElementById("pgm-tc");
  var selIdx = 0, autoT = null;
  function selectFeed(i){
    selIdx = i; var m = seq[i]; document.getElementById("pgm").classList.toggle("slate-on", m.k==="slate");
    mons.forEach(function(d,j){ d.classList.toggle("sel", j===i); d.classList.toggle("on", j===i || d.querySelector("img") && j===i); });
    pgmSrc.textContent = m.src;
    if (m.k === "photo"){ pgmImg.style.opacity = 1; pgmImg.style.objectPosition = m.pos; pgmImg.style.transform = "scale("+m.z+")"; pgmImg.style.transformOrigin = m.pos; pgmImg.style.filter = m.cls==="bw" ? "grayscale(1) contrast(1.12)" : m.cls==="warm" ? "sepia(.35) saturate(1.1) contrast(1.05)" : "saturate(.8) contrast(1.05)"; pgmFeed.className = "feed"; pgmFeed.innerHTML = ""; }
    else { pgmImg.style.opacity = 0; pgmFeed.className = "feed on" + (m.k==="live" ? " live" : ""); if (m.k==="noise"){ pgmFeed.innerHTML = '<canvas width="640" height="400"></canvas>'; pgmNoiseCtx = pgmFeed.querySelector("canvas").getContext("2d"); }
      else { pgmNoiseCtx = null; if (m.k==="nosig") pgmFeed.className = "feed on nosig"; pgmFeed.innerHTML = m.k==="slate" ? slateHTML() : m.k==="nosig" ? '<span class="word">No signal</span>' : m.k==="bars" ? barsHTML() : '<span class="word">'+tc(Date.now()/40 % 90000)+'</span>'; } }
  }
  seq.forEach(function(m,i){ var d = makeMon(m,i); d.dataset.depth = (0.4 + (i%3)*0.3).toFixed(2); wall.appendChild(d); mons.push(d);
    d.addEventListener("mouseenter", function(){ selectFeed(i); clearInterval(autoT); autoT = null; });
    d.addEventListener("click", function(){ selectFeed(i); }); });
  selectFeed(0);
  if (!reduce){ autoT = setInterval(function(){ selectFeed((selIdx+1)%seq.length); }, 3200); }
  mv.addEventListener("mouseleave", function(){ if (!autoT && !reduce) autoT = setInterval(function(){ selectFeed((selIdx+1)%seq.length); }, 3200); });
  setInterval(function(){ pgmTc.textContent = tc(Date.now()/40 % 90000); var w = pgmFeed.querySelector(".word"); if (w && seq[selIdx].k==="live") w.textContent = pgmTc.textContent; }, 120);
  /* audio meters */
  var meters = document.getElementById("meters"); for (var mi=0; mi<24; mi++){ var b = document.createElement("i"); b.className = mi>19?"r":mi>14?"y":"g"; meters.appendChild(b); }
  var mbars = Array.prototype.slice.call(meters.children), lvl = 0.5;
  if (!reduce) setInterval(function(){ lvl += (Math.random()-.5)*.35; lvl = Math.max(.15, Math.min(.95, lvl)); var n = Math.round(lvl*24); mbars.forEach(function(b,i){ b.style.transform = "scaleY(" + (i<n ? (0.5+Math.random()*0.5) : 0.25) + ")"; b.style.opacity = i<n ? 1 : .35; }); }, 110);
  var mx=0,my=0,tx=0,ty=0;
  if (!touch && !reduce){
    window.addEventListener("mousemove", function(e){ tx = e.clientX/window.innerWidth-.5; ty = e.clientY/window.innerHeight-.5; });
    (function loop(){ mx += (tx-mx)*.06; my += (ty-my)*.06; mv.style.setProperty("--px",(-mx*14)+"px"); mv.style.setProperty("--py",(-my*10)+"px"); requestAnimationFrame(loop); })();
  }
  if (window.gsap && window.ScrollTrigger && !reduce){
    gsap.registerPlugin(ScrollTrigger);
    gsap.to("#mv", { y:-60, scale:.94, opacity:.3, ease:"none", scrollTrigger:{ trigger:"#hero", start:"top top", end:"bottom 25%", scrub:.6 } });
    document.querySelectorAll(".cam").forEach(function(c,i){ var ang=(i*90+45)*Math.PI/180;
      gsap.from(c, { x: Math.cos(ang)*240, y: Math.sin(ang)*160+120, rotate:(i%2?1:-1)*(10+i*2), opacity:.2, ease:"power2.out", scrollTrigger:{ trigger:"#services", start:"top 85%", end:"top 30%", scrub:.8 } }); });
    window.addEventListener("load", function(){ ScrollTrigger.refresh(); });
  }

})();
</script>

</body>
</html>
