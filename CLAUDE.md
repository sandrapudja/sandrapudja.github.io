# sandrapudja.com — notes for Claude

Personal website of **Sandra Pudja**, TV producer, Berlin. Static HTML, no build step, no framework.
Hosted on Hostinger; Hostinger pulls this repo (branch `main`) into `public_html` on every push.
**A push to `main` is a live deploy.** Make one clean change at a time.

## Files

| Path | What it is |
|---|---|
| `index.html` | The whole site, English default. All three languages live inside it (see Texts). |
| `de/index.html` | Same page, German as default language. Keep it in sync with `index.html` (same file, only `lang = "de"` and `src="../sandra.jpg"` differ). |
| `tv-production.html`, `live-event-production.html`, `shoot-organisation.html`, `production-consulting.html`, `tv-producer-berlin.html` | SEO service pages, English. |
| `de/*.html` | German versions of the service pages. |
| `send.php` | Booking form handler (PHP `mail()`). Sends the request to Sandra and a confirmation to the sender. |
| `sandra.jpg` | The one portrait used everywhere (multiviewer, live monitor, service pages). 896×1088, ~70 KB. |
| `.htaccess` | HTTPS + non-www redirect, clean URLs (`/tv-production` → `tv-production.html`). |
| `sitemap.xml`, `robots.txt` | SEO. Update `sitemap.xml` if a page is added. |

## Texts (how to change wording)

All copy on `index.html` is in one JavaScript object near the top of the `<script>`: `var T = { en:{…}, hr:{…}, de:{…} }`.
Keys are stable: `svc.1.t` (service 1 title), `svc.1.d` (short), `svc.1.m` (long), `way.3.t` / `way.3.d` / `way.3.l` / `way.3.cta` (Sandra way card 3), `book.*` (booking), `x.*` (hero, stats), `ch0.*` (secret channel).
**Change the text in all three languages**, then copy the whole `T` object into `de/index.html` as well.
Service pages have their text inline in HTML; edit EN and DE separately.

## Structure of index.html

1. **Hero** — name, role line, two buttons, and the **multiviewer** on the right (PGM screen + 6 preview monitors: CAM 1–4, BARS, CLOCK). Hover a preview to send it to PGM.
2. **Stats** strip (4 / 0 / 48h / 3).
3. **What she does** — 4 cards, each with an animated SVG scene (TV studio, live waveform, call sheet, mentoring). Click opens the long text.
4. **The Sandra way** — 6 cards that stack on scroll (`.scard`, sticky). Each has number, title, short, long, CTA.
5. **Booking** — form (posts to `/send.php`) + live monitor with the portrait.
6. **Footer** — service page index, contact, about.

Hidden: click the red dot in the header (or press **R**) → **CH 00**, a birthday message. Keys `ch0.*`.
Intro countdown (3-2-1-ON AIR) plays once per browser session.

## Adding photos

`PHOTOS = ["sandra.jpg"]` in the script. Add more filenames to the array; each photo monitor in the multiviewer takes the next one in turn. Keep photos ≤ 1200 px wide, JPEG quality ~80.

## Booking form / e-mail

`send.php`, top of file: `$TO` = Sandra's inbox, `$FROM` = a mailbox that exists on this domain (create it in hPanel → Emails, e.g. `booking@sandrapudja.com`), otherwise Hostinger may drop the mail.
The `code` under the form and the fallback `mailto:` use `MAIL` in `index.html`; keep it equal to `$TO`.

## Rules

- Keep **bold only** for emphasis, never italics.
- Don't add libraries; the only external one is GSAP (ScrollTrigger) from cdnjs.
- Don't change the domain in `canonical`/`sitemap.xml`/`.htaccess` unless the site moves.
- Test on a phone width before pushing: the stacked cards and multiviewer must still work.
- Spell the author's name "Andro Anic".
