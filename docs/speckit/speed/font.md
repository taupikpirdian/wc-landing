## Issue
Consider setting font-display to swap or optional to ensure text is consistently visible. swap can be further optimized to mitigate layout shifts with font metric overrides.FCPUnscored
URL
Est Savings
sedotwcresmi.id 1st party
…fonts/fontawesome-webfont.woff2?v=4.7.0(sedotwcresmi.id)
1,640 ms
…fonts/pbminfotech-base-icons.woff2?49550181(sedotwcresmi.id)
1,240 ms

## Font berikut tidak punya font-display yang optimal:
- fontawesome-webfont.woff2
- pbminfotech-base-icons.woff2

## Akibatnya:
- Browser nunggu font selesai di-download
- Selama itu, teks tidak muncul (FOIT – Flash of Invisible Text)
- FCP jadi lambat → Unscored / jelek

Tambahkan font-display: swap atau optional
- Di CSS tempat font didefinisikan (@font-face).

## Hasil
- Teks langsung tampil pakai font default
- Font custom nyusul setelah load
- FCP jadi lebih cepat