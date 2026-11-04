# sandrapudja.com — notes for Claude

Personal website of **Sandra Pudja**, TV producer, Berlin. Static HTML, no build step, no framework.
Hosted on Hostinger; Hostinger pulls this repo (branch `main`) into `public_html` on every push.
**A push to `main` is a live deploy.** Make one clean change at a time.

## Files

| Path | What it is |
|---|---|
| `index.php` | The whole site, English default. All three languages live inside it (see Texts). |
| `de/index.php` | Same page, German as default language. Keep it in sync with `index.php` (same file, only `lang = "de"` and `src="../sandra.jpg"` differ). |
| `tv-production.php`, `live-event-production.php`, `shoot-organisation.php`, `right-hand.php` (replaced `production-consulting.php` in Nov 2026; old URLs 301 in `.htaccess`), `tv-producer-berlin.php` | SEO service pages, English. |
| `de/*.php` | German versions of the service pages. |
| `send.php` | Booking form handler (PHP `mail()`). Sends the request to Sandra and a confirmation to the sender. |
| `sandra.jpg` | The one portrait used everywhere (multiviewer, live monitor, service pages). 896×1088, ~70 KB. |
| `.htaccess` | HTTPS + non-www redirect, clean URLs (`/tv-production` → `tv-production.php`), old `.html` links 301 to `.php`. |
| `sitemap.xml`, `robots.txt` | SEO. Update `sitemap.xml` if a page is added. |

## Texts (how to change wording)

All copy on `index.php` is in one JavaScript object near the top of the `<script>`: `var T = { en:{…}, hr:{…}, de:{…} }`.
Keys are stable: `svc.1.t` (service 1 title), `svc.1.d` (short), `svc.1.m` (long), `way.3.t` / `way.3.d` / `way.3.l` / `way.3.cta` (Sandra way card 3), `book.*` (booking), `x.*` (hero, stats).
**Change the text in all three languages**, then copy the whole `T` object into `de/index.php` as well.
Service pages have their text inline in HTML; edit EN and DE separately.

## Structure of index.php

1. **Hero** — name, role line, two buttons, and the **multiviewer** on the right (PGM screen + 6 preview monitors: CAM 1–4, BARS, CLOCK). Hover a preview to send it to PGM.
2. **Stats** strip (4 / 0 / 48h / 3).
3. **What I do** — 4 cards, each with an animated SVG scene (TV studio, live waveform, call sheet, right-hand to-do list). Click opens the long text.
4. **How I work** — 6 cards that stack on scroll (`.scard`, sticky). Each has number, title, short, long, CTA.
5. **Booking** — form (posts to `/send.php`) + live monitor with the portrait.
6. **Footer** — service page index, contact, about.

The red dot in the header is decoration only (the hidden CH 00 birthday channel was removed in Nov 2026).
Intro countdown (3-2-1-ON AIR) plays once per browser session.

## Adding photos

`PHOTOS = ["off-duty.jpg"]` in the script; monitor sources are set in `seq` (slate, noise, photo, nosig, bars, live). The slate (`slateHTML`, text key `x.slate`) replaces the old AI portrait on the big screen and booking monitor. Add more filenames to the array; each photo monitor in the multiviewer takes the next one in turn. Keep photos ≤ 1200 px wide, JPEG quality ~80.

## Booking form / e-mail

`send.php`, top of file: `$TO` = Sandra's inbox, `$FROM` = a mailbox that exists on this domain (create it in hPanel → Emails, e.g. `booking@sandrapudja.com`), otherwise Hostinger may drop the mail.
The `code` under the form and the fallback `mailto:` use `MAIL` in `index.php`; keep it equal to `$TO`.

## Rules

- Keep **bold only** for emphasis, never italics.
- Don't add libraries; the only external one is GSAP (ScrollTrigger) from cdnjs.
- Don't change the domain in `canonical`/`sitemap.xml`/`.htaccess` unless the site moves.
- Test on a phone width before pushing: the stacked cards and multiviewer must still work.
- Spell the author's name "Andro Anic".

## Password gate (temporary)

Every page starts with `<?php require __DIR__ . '/_gate.php'; ?>` (in `de/`: `'/../_gate.php'`). Pages are plain HTML otherwise.
`_gate.php` checks the HttpOnly cookie `sp_access`; without it the visitor gets `gate.php`: red curtain, hint "Kaj?", password `zmaj` (case-insensitive, trailing "!" allowed). Correct answer sets the cookie for 90 days and the page reloads into the site.
Pages are sent with `Cache-Control: private, no-store` and `Vary: Cookie` so a CDN never serves the unlocked page to a locked visitor.
`og.jpg`, `sandra.jpg` and `robots.txt` are static and stay public, so share previews keep working.

**To open the site to everyone:** in `_gate.php` replace everything after the `define(...)` line with nothing (or make the file return immediately: put `return;` on line 2) and push. Pages keep working as `.php`.
