<style>
@import"https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap";

*,
:before,
:after {
    box-sizing: border-box;
    border-width: 0;
    border-style: solid;
    border-color: #e5e7eb
}

:before,
:after {
    --tw-content: ""
}

html {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
    font-feature-settings: normal
}

body {
    margin: 0;
    line-height: inherit
}

hr {
    height: 0;
    color: inherit;
    border-top-width: 1px
}

abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-size: inherit;
    font-weight: inherit
}

a {
    color: inherit;
    text-decoration: inherit
}

b,
strong {
    font-weight: bolder
}

code,
kbd,
samp,
pre {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
    font-size: 1em
}

small {
    font-size: 80%
}

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse
}

button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    color: inherit;
    margin: 0;
    padding: 0
}

button,
select {
    text-transform: none
}

button,
[type=button],
[type=reset],
[type=submit] {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none
}

:-moz-focusring {
    outline: auto
}

:-moz-ui-invalid {
    box-shadow: none
}

progress {
    vertical-align: baseline
}

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}

summary {
    display: list-item
}

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
    margin: 0
}

fieldset {
    margin: 0;
    padding: 0
}

legend {
    padding: 0
}

ol,
ul,
menu {
    list-style: none;
    margin: 0;
    padding: 0
}

textarea {
    resize: vertical
}

input::-moz-placeholder,
textarea::-moz-placeholder {
    opacity: 1;
    color: #9ca3af
}

input::placeholder,
textarea::placeholder {
    opacity: 1;
    color: #9ca3af
}

button,
[role=button] {
    cursor: pointer
}

:disabled {
    cursor: default
}

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
    display: block;
    vertical-align: middle
}

img,
video {
    max-width: 100%;
    height: auto
}

[hidden] {
    display: none
}

[type=text],
[type=email],
[type=url],
[type=password],
[type=number],
[type=date],
[type=datetime-local],
[type=month],
[type=search],
[type=tel],
[type=time],
[type=week],
[multiple],
textarea,
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    border-radius: 0;
    padding: .5rem .75rem;
    font-size: 1rem;
    line-height: 1.5rem;
    --tw-shadow: 0 0 #0000
}

[type=text]:focus,
[type=email]:focus,
[type=url]:focus,
[type=password]:focus,
[type=number]:focus,
[type=date]:focus,
[type=datetime-local]:focus,
[type=month]:focus,
[type=search]:focus,
[type=tel]:focus,
[type=time]:focus,
[type=week]:focus,
[multiple]:focus,
textarea:focus,
select:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    border-color: #2563eb
}

input::-moz-placeholder,
textarea::-moz-placeholder {
    color: #6b7280;
    opacity: 1
}

input::placeholder,
textarea::placeholder {
    color: #6b7280;
    opacity: 1
}

::-webkit-datetime-edit-fields-wrapper {
    padding: 0
}

::-webkit-date-and-time-value {
    min-height: 1.5em
}

::-webkit-datetime-edit,
::-webkit-datetime-edit-year-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-minute-field,
::-webkit-datetime-edit-second-field,
::-webkit-datetime-edit-millisecond-field,
::-webkit-datetime-edit-meridiem-field {
    padding-top: 0;
    padding-bottom: 0
}

select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right .5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact
}

[multiple] {
    background-image: initial;
    background-position: initial;
    background-repeat: unset;
    background-size: initial;
    padding-right: .75rem;
    -webkit-print-color-adjust: unset;
    print-color-adjust: unset
}

[type=checkbox],
[type=radio] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding: 0;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
    display: inline-block;
    vertical-align: middle;
    background-origin: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    flex-shrink: 0;
    height: 1rem;
    width: 1rem;
    color: #2563eb;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    --tw-shadow: 0 0 #0000
}

[type=checkbox] {
    border-radius: 0
}

[type=radio] {
    border-radius: 100%
}

[type=checkbox]:focus,
[type=radio]:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 2px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
}

[type=checkbox]:checked,
[type=radio]:checked {
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat
}

[type=checkbox]:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")
}

[type=radio]:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e")
}

[type=checkbox]:checked:hover,
[type=checkbox]:checked:focus,
[type=radio]:checked:hover,
[type=radio]:checked:focus {
    border-color: transparent;
    background-color: currentColor
}

[type=checkbox]:indeterminate {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat
}

[type=checkbox]:indeterminate:hover,
[type=checkbox]:indeterminate:focus {
    border-color: transparent;
    background-color: currentColor
}

[type=file] {
    background: unset;
    border-color: inherit;
    border-width: 0;
    border-radius: 0;
    padding: 0;
    font-size: unset;
    line-height: inherit
}

[type=file]:focus {
    outline: 1px solid ButtonText;
    outline: 1px auto -webkit-focus-ring-color
}

*,
:before,
:after {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / .5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

::backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / .5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

.prose {
    color: var(--tw-prose-body);
    max-width: 65ch
}

.prose :where([class~="lead"]):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-lead);
    font-size: 1.25em;
    line-height: 1.6;
    margin-top: 1.2em;
    margin-bottom: 1.2em
}

.prose :where(a):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-links);
    text-decoration: underline;
    font-weight: 500
}

.prose :where(strong):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-bold);
    font-weight: 600
}

.prose :where(a strong):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(blockquote strong):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(thead th strong):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(ol):not(:where([class~="not-prose"] *)) {
    list-style-type: decimal;
    margin-top: 1.25em;
    margin-bottom: 1.25em;
    padding-left: 1.625em
}

.prose :where(ol[type="A"]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-alpha
}

.prose :where(ol[type="a"]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-alpha
}

.prose :where(ol[type="A"s]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-alpha
}

.prose :where(ol[type="a"s]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-alpha
}

.prose :where(ol[type="I"]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-roman
}

.prose :where(ol[type="i"]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-roman
}

.prose :where(ol[type="I"s]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-roman
}

.prose :where(ol[type="i"s]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-roman
}

.prose :where(ol[type="1"]):not(:where([class~="not-prose"] *)) {
    list-style-type: decimal
}

.prose :where(ul):not(:where([class~="not-prose"] *)) {
    list-style-type: disc;
    margin-top: 1.25em;
    margin-bottom: 1.25em;
    padding-left: 1.625em
}

.prose :where(ol > li):not(:where([class~="not-prose"] *))::marker {
    font-weight: 400;
    color: var(--tw-prose-counters)
}

.prose :where(ul > li):not(:where([class~="not-prose"] *))::marker {
    color: var(--tw-prose-bullets)
}

.prose :where(hr):not(:where([class~="not-prose"] *)) {
    border-color: var(--tw-prose-hr);
    border-top-width: 1px;
    margin-top: 3em;
    margin-bottom: 3em
}

.prose :where(blockquote):not(:where([class~="not-prose"] *)) {
    font-weight: 500;
    font-style: italic;
    color: var(--tw-prose-quotes);
    border-left-width: .25rem;
    border-left-color: var(--tw-prose-quote-borders);
    quotes: "\201c""\201d""\2018""\2019";
    margin-top: 1.6em;
    margin-bottom: 1.6em;
    padding-left: 1em
}

.prose :where(blockquote p:first-of-type):not(:where([class~="not-prose"] *)):before {
    content: open-quote
}

.prose :where(blockquote p:last-of-type):not(:where([class~="not-prose"] *)):after {
    content: close-quote
}

.prose :where(h1):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 800;
    font-size: 2.25em;
    margin-top: 0;
    margin-bottom: .8888889em;
    line-height: 1.1111111
}

.prose :where(h1 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 900;
    color: inherit
}

.prose :where(h2):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 700;
    font-size: 1.5em;
    margin-top: 2em;
    margin-bottom: 1em;
    line-height: 1.3333333
}

.prose :where(h2 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 800;
    color: inherit
}

.prose :where(h3):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    font-size: 1.25em;
    margin-top: 1.6em;
    margin-bottom: .6em;
    line-height: 1.6
}

.prose :where(h3 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 700;
    color: inherit
}

.prose :where(h4):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    margin-top: 1.5em;
    margin-bottom: .5em;
    line-height: 1.5
}

.prose :where(h4 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 700;
    color: inherit
}

.prose :where(img):not(:where([class~="not-prose"] *)) {
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(figure > *):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
    margin-bottom: 0
}

.prose :where(figcaption):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-captions);
    font-size: .875em;
    line-height: 1.4285714;
    margin-top: .8571429em
}

.prose :where(code):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-code);
    font-weight: 600;
    font-size: .875em
}

.prose :where(code):not(:where([class~="not-prose"] *)):before {
    content: "`"
}

.prose :where(code):not(:where([class~="not-prose"] *)):after {
    content: "`"
}

.prose :where(a code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(h1 code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(h2 code):not(:where([class~="not-prose"] *)) {
    color: inherit;
    font-size: .875em
}

.prose :where(h3 code):not(:where([class~="not-prose"] *)) {
    color: inherit;
    font-size: .9em
}

.prose :where(h4 code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(blockquote code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(thead th code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(pre):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-pre-code);
    background-color: var(--tw-prose-pre-bg);
    overflow-x: auto;
    font-weight: 400;
    font-size: .875em;
    line-height: 1.7142857;
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em;
    border-radius: .375rem;
    padding: .8571429em 1.1428571em
}

.prose :where(pre code):not(:where([class~="not-prose"] *)) {
    background-color: transparent;
    border-width: 0;
    border-radius: 0;
    padding: 0;
    font-weight: inherit;
    color: inherit;
    font-size: inherit;
    font-family: inherit;
    line-height: inherit
}

.prose :where(pre code):not(:where([class~="not-prose"] *)):before {
    content: none
}

.prose :where(pre code):not(:where([class~="not-prose"] *)):after {
    content: none
}

.prose :where(table):not(:where([class~="not-prose"] *)) {
    width: 100%;
    table-layout: auto;
    text-align: left;
    margin-top: 2em;
    margin-bottom: 2em;
    font-size: .875em;
    line-height: 1.7142857
}

.prose :where(thead):not(:where([class~="not-prose"] *)) {
    border-bottom-width: 1px;
    border-bottom-color: var(--tw-prose-th-borders)
}

.prose :where(thead th):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    vertical-align: bottom;
    padding-right: .5714286em;
    padding-bottom: .5714286em;
    padding-left: .5714286em
}

.prose :where(tbody tr):not(:where([class~="not-prose"] *)) {
    border-bottom-width: 1px;
    border-bottom-color: var(--tw-prose-td-borders)
}

.prose :where(tbody tr:last-child):not(:where([class~="not-prose"] *)) {
    border-bottom-width: 0
}

.prose :where(tbody td):not(:where([class~="not-prose"] *)) {
    vertical-align: baseline
}

.prose :where(tfoot):not(:where([class~="not-prose"] *)) {
    border-top-width: 1px;
    border-top-color: var(--tw-prose-th-borders)
}

.prose :where(tfoot td):not(:where([class~="not-prose"] *)) {
    vertical-align: top
}

.prose {
    --tw-prose-body: #374151;
    --tw-prose-headings: #111827;
    --tw-prose-lead: #4b5563;
    --tw-prose-links: #111827;
    --tw-prose-bold: #111827;
    --tw-prose-counters: #6b7280;
    --tw-prose-bullets: #d1d5db;
    --tw-prose-hr: #e5e7eb;
    --tw-prose-quotes: #111827;
    --tw-prose-quote-borders: #e5e7eb;
    --tw-prose-captions: #6b7280;
    --tw-prose-code: #111827;
    --tw-prose-pre-code: #e5e7eb;
    --tw-prose-pre-bg: #1f2937;
    --tw-prose-th-borders: #d1d5db;
    --tw-prose-td-borders: #e5e7eb;
    --tw-prose-invert-body: #d1d5db;
    --tw-prose-invert-headings: #fff;
    --tw-prose-invert-lead: #9ca3af;
    --tw-prose-invert-links: #fff;
    --tw-prose-invert-bold: #fff;
    --tw-prose-invert-counters: #9ca3af;
    --tw-prose-invert-bullets: #4b5563;
    --tw-prose-invert-hr: #374151;
    --tw-prose-invert-quotes: #f3f4f6;
    --tw-prose-invert-quote-borders: #374151;
    --tw-prose-invert-captions: #9ca3af;
    --tw-prose-invert-code: #fff;
    --tw-prose-invert-pre-code: #d1d5db;
    --tw-prose-invert-pre-bg: rgb(0 0 0 / 50%);
    --tw-prose-invert-th-borders: #4b5563;
    --tw-prose-invert-td-borders: #374151;
    font-size: 1rem;
    line-height: 1.75
}

.prose :where(p):not(:where([class~="not-prose"] *)) {
    margin-top: 1.25em;
    margin-bottom: 1.25em
}

.prose :where(video):not(:where([class~="not-prose"] *)) {
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(figure):not(:where([class~="not-prose"] *)) {
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(li):not(:where([class~="not-prose"] *)) {
    margin-top: .5em;
    margin-bottom: .5em
}

.prose :where(ol > li):not(:where([class~="not-prose"] *)) {
    padding-left: .375em
}

.prose :where(ul > li):not(:where([class~="not-prose"] *)) {
    padding-left: .375em
}

.prose :where(.prose > ul > li p):not(:where([class~="not-prose"] *)) {
    margin-top: .75em;
    margin-bottom: .75em
}

.prose :where(.prose > ul > li > *:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.25em
}

.prose :where(.prose > ul > li > *:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.25em
}

.prose :where(.prose > ol > li > *:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.25em
}

.prose :where(.prose > ol > li > *:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.25em
}

.prose :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~="not-prose"] *)) {
    margin-top: .75em;
    margin-bottom: .75em
}

.prose :where(hr + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(h2 + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(h3 + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(h4 + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(thead th:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0
}

.prose :where(thead th:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0
}

.prose :where(tbody td, tfoot td):not(:where([class~="not-prose"] *)) {
    padding: .5714286em
}

.prose :where(tbody td:first-child, tfoot td:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0
}

.prose :where(tbody td:last-child, tfoot td:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0
}

.prose :where(.prose > :first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(.prose > :last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 0
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0
}

.fixed {
    position: fixed
}

.absolute {
    position: absolute
}

.relative {
    position: relative
}

.sticky {
    position: sticky
}

.inset-0 {
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px
}

.inset-1\/2 {
    top: 50%;
    right: 50%;
    bottom: 50%;
    left: 50%
}

.top-0 {
    top: 0px
}

.top-20 {
    top: 5rem
}

.right-6 {
    right: 1.5rem
}

.left-0 {
    left: 0px
}

.top-5 {
    top: 1.25rem
}

.right-5 {
    right: 1.25rem
}

.left-\[40\%\] {
    left: 40%
}

.top-44 {
    top: 11rem
}

.left-28 {
    left: 7rem
}

.top-2 {
    top: .5rem
}

.right-3 {
    right: .75rem
}

.bottom-0 {
    bottom: 0px
}

.top-\[32\%\] {
    top: 32%
}

.z-10 {
    z-index: 10
}

.z-20 {
    z-index: 20
}

.-order-1 {
    order: -1
}

.col-span-2 {
    grid-column: span 2 / span 2
}

.col-span-1 {
    grid-column: span 1 / span 1
}

.col-span-3 {
    grid-column: span 3 / span 3
}

.-m-3 {
    margin: -.75rem
}

.m-auto {
    margin: auto
}

.mx-0 {
    margin-left: 0;
    margin-right: 0
}

.my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem
}

.my-2 {
    margin-top: .5rem;
    margin-bottom: .5rem
}

.my-1\.5 {
    margin-top: .375rem;
    margin-bottom: .375rem
}

.mx-0\.5 {
    margin-left: .125rem;
    margin-right: .125rem
}

.my-1 {
    margin-top: .25rem;
    margin-bottom: .25rem
}

.mx-2 {
    margin-left: .5rem;
    margin-right: .5rem
}

.mx-5 {
    margin-left: 1.25rem;
    margin-right: 1.25rem
}

.my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem
}

.my-5 {
    margin-top: 1.25rem;
    margin-bottom: 1.25rem
}

.my-3 {
    margin-top: .75rem;
    margin-bottom: .75rem
}

.mx-auto {
    margin-left: auto;
    margin-right: auto
}

.mx-3 {
    margin-left: .75rem;
    margin-right: .75rem
}

.my-7 {
    margin-top: 1.75rem;
    margin-bottom: 1.75rem
}

.my-2\.5 {
    margin-top: .625rem;
    margin-bottom: .625rem
}

.mt-3 {
    margin-top: .75rem
}

.mb-2 {
    margin-bottom: .5rem
}

.mr-1 {
    margin-right: .25rem
}

.mb-3 {
    margin-bottom: .75rem
}

.mr-2\.5 {
    margin-right: .625rem
}

.mr-2 {
    margin-right: .5rem
}

.mt-12 {
    margin-top: 3rem
}

.mb-8 {
    margin-bottom: 2rem
}

.mb-20 {
    margin-bottom: 5rem
}

.mr-7 {
    margin-right: 1.75rem
}

.ml-3 {
    margin-left: .75rem
}

.ml-2 {
    margin-left: .5rem
}

.ml-4 {
    margin-left: 1rem
}

.mb-4 {
    margin-bottom: 1rem
}

.mb-5 {
    margin-bottom: 1.25rem
}

.mt-4 {
    margin-top: 1rem
}

.mr-3 {
    margin-right: .75rem
}

.mt-5 {
    margin-top: 1.25rem
}

.mr-4 {
    margin-right: 1rem
}

.mb-12 {
    margin-bottom: 3rem
}

.mt-1 {
    margin-top: .25rem
}

.mt-6 {
    margin-top: 1.5rem
}

.mt-2 {
    margin-top: .5rem
}

.mt-8 {
    margin-top: 2rem
}

.mb-28 {
    margin-bottom: 7rem
}

.-ml-6 {
    margin-left: -1.5rem
}

.mb-6 {
    margin-bottom: 1.5rem
}

.mb-1 {
    margin-bottom: .25rem
}

.mb-10 {
    margin-bottom: 2.5rem
}

.mb-7 {
    margin-bottom: 1.75rem
}

.ml-10 {
    margin-left: 2.5rem
}

.ml-16 {
    margin-left: 4rem
}

.ml-5 {
    margin-left: 1.25rem
}

.mb-14 {
    margin-bottom: 3.5rem
}

.block {
    display: block
}

.flex {
    display: flex
}

.inline-flex {
    display: inline-flex
}

.grid {
    display: grid
}

.hidden {
    display: none
}

.h-4 {
    height: 1rem
}

.h-12 {
    height: 3rem
}

.h-5 {
    height: 1.25rem
}

.h-8 {
    height: 2rem
}

.h-\[66px\] {
    height: 66px
}

.h-6 {
    height: 1.5rem
}

.h-10 {
    height: 2.5rem
}

.h-full {
    height: 100%
}

.h-\[150vh\] {
    height: 150vh
}

.h-24 {
    height: 6rem
}

.h-36 {
    height: 9rem
}

.h-28 {
    height: 7rem
}

.h-\[72px\] {
    height: 72px
}

.h-screen {
    height: 100vh
}

.h-3 {
    height: .75rem
}

.h-16 {
    height: 4rem
}

.h-auto {
    height: auto
}

.min-h-full {
    min-height: 100%
}

.w-full {
    width: 100%
}

.w-4 {
    width: 1rem
}

.w-\[38px\] {
    width: 38px
}

.w-5 {
    width: 1.25rem
}

.w-8 {
    width: 2rem
}

.w-6 {
    width: 1.5rem
}

.w-\[420px\] {
    width: 420px
}

.w-12 {
    width: 3rem
}

.w-10\/12 {
    width: 83.333333%
}

.w-24 {
    width: 6rem
}

.w-10 {
    width: 2.5rem
}

.w-\[72px\] {
    width: 72px
}

.w-3 {
    width: .75rem
}

.w-28 {
    width: 7rem
}

.w-1\/3 {
    width: 33.333333%
}

.w-auto {
    width: auto
}

.w-80 {
    width: 20rem
}

.w-11\/12 {
    width: 91.666667%
}

.w-16 {
    width: 4rem
}

.min-w-\[230px\] {
    min-width: 230px
}

.max-w-xs {
    max-width: 20rem
}

.max-w-3xl {
    max-width: 48rem
}

.basis-1\/2 {
    flex-basis: 50%
}

.translate-y-1 {
    --tw-translate-y: .25rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.cursor-pointer {
    cursor: pointer
}

.appearance-none {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr))
}

.grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr))
}

.flex-col {
    flex-direction: column
}

.flex-wrap {
    flex-wrap: wrap
}

.items-center {
    align-items: center
}

.justify-end {
    justify-content: flex-end
}

.justify-center {
    justify-content: center
}

.justify-between {
    justify-content: space-between
}

.gap-6 {
    gap: 1.5rem
}

.gap-4 {
    gap: 1rem
}

.gap-3 {
    gap: .75rem
}

.gap-2 {
    gap: .5rem
}

.space-y-2>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.5rem * var(--tw-space-y-reverse))
}

.space-x-2>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.5rem * var(--tw-space-x-reverse));
    margin-left: calc(.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-5>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1.25rem * var(--tw-space-x-reverse));
    margin-left: calc(1.25rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-y-3>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.75rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.75rem * var(--tw-space-y-reverse))
}

.space-y-6>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.5rem * var(--tw-space-y-reverse))
}

.space-y-7>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.75rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.75rem * var(--tw-space-y-reverse))
}

.space-y-5>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.25rem * var(--tw-space-y-reverse))
}

.space-y-9>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2.25rem * var(--tw-space-y-reverse))
}

.space-x-3>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.75rem * var(--tw-space-x-reverse));
    margin-left: calc(.75rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-y-12>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(3rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(3rem * var(--tw-space-y-reverse))
}

.overflow-y-auto {
    overflow-y: auto
}

.truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.rounded-2xl {
    border-radius: 1rem
}

.rounded-lg {
    border-radius: .5rem
}

.rounded-md {
    border-radius: .375rem
}

.rounded-full {
    border-radius: 9999px
}

.rounded-\[16px\] {
    border-radius: 16px
}

.rounded-xl {
    border-radius: .75rem
}

.rounded {
    border-radius: .25rem
}

.rounded-3xl {
    border-radius: 1.5rem
}

.rounded-b-2xl {
    border-bottom-right-radius: 1rem;
    border-bottom-left-radius: 1rem
}

.border-2 {
    border-width: 2px
}

.border-0 {
    border-width: 0px
}

.border {
    border-width: 1px
}

.border-4 {
    border-width: 4px
}

.border-b {
    border-bottom-width: 1px
}

.border-t {
    border-top-width: 1px
}

.border-b-2 {
    border-bottom-width: 2px
}

.border-gray-200 {
    --tw-border-opacity: 1;
    border-color: rgb(229 231 235 / var(--tw-border-opacity))
}

.border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity))
}

.border-white {
    --tw-border-opacity: 1;
    border-color: rgb(255 255 255 / var(--tw-border-opacity))
}

.border-transparent {
    border-color: transparent
}

.border-blue-500 {
    --tw-border-opacity: 1;
    border-color: rgb(59 130 246 / var(--tw-border-opacity))
}

.bg-gray-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39 / var(--tw-bg-opacity))
}

.bg-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity))
}

.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity))
}

.bg-blue-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(59 130 246 / var(--tw-bg-opacity))
}

.bg-\[rgba\(0\,0\,0\,\.3\)\] {
    background-color: #0000004d
}

.bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity))
}

.bg-\[rgba\(28\,29\,31\,\.8\)\] {
    background-color: #1c1d1fcc
}

.bg-gray-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(156 163 175 / var(--tw-bg-opacity))
}

.bg-\[url\(\'https\:\/\/assets\.laracasts\.com\/images\/wallpapers\/thumbnails\/inspire-me\.png\'\)\] {
    background-image: url(https://assets.laracasts.com/images/wallpapers/thumbnails/inspire-me.png)
}

.bg-cover {
    background-size: cover
}

.bg-contain {
    background-size: contain
}

.bg-center {
    background-position: center
}

.bg-no-repeat {
    background-repeat: no-repeat
}

.object-cover {
    -o-object-fit: cover;
    object-fit: cover
}

.p-5 {
    padding: 1.25rem
}

.p-3 {
    padding: .75rem
}

.p-4 {
    padding: 1rem
}

.p-8 {
    padding: 2rem
}

.p-2\.5 {
    padding: .625rem
}

.p-2 {
    padding: .5rem
}

.px-7 {
    padding-left: 1.75rem;
    padding-right: 1.75rem
}

.px-2 {
    padding-left: .5rem;
    padding-right: .5rem
}

.py-1 {
    padding-top: .25rem;
    padding-bottom: .25rem
}

.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem
}

.px-1 {
    padding-left: .25rem;
    padding-right: .25rem
}

.py-2 {
    padding-top: .5rem;
    padding-bottom: .5rem
}

.px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem
}

.px-3 {
    padding-left: .75rem;
    padding-right: .75rem
}

.py-2\.5 {
    padding-top: .625rem;
    padding-bottom: .625rem
}

.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem
}

.px-4 {
    padding-left: 1rem;
    padding-right: 1rem
}

.py-3 {
    padding-top: .75rem;
    padding-bottom: .75rem
}

.px-1\.5 {
    padding-left: .375rem;
    padding-right: .375rem
}

.py-1\.5 {
    padding-top: .375rem;
    padding-bottom: .375rem
}

.py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem
}

.py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem
}

.py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem
}

.pt-\[68px\] {
    padding-top: 68px
}

.pb-10 {
    padding-bottom: 2.5rem
}

.pr-4 {
    padding-right: 1rem
}

.pl-2 {
    padding-left: .5rem
}

.pb-4 {
    padding-bottom: 1rem
}

.pt-5 {
    padding-top: 1.25rem
}

.pb-7 {
    padding-bottom: 1.75rem
}

.pt-7 {
    padding-top: 1.75rem
}

.pt-60 {
    padding-top: 15rem
}

.pb-5 {
    padding-bottom: 1.25rem
}

.pb-3 {
    padding-bottom: .75rem
}

.pr-8 {
    padding-right: 2rem
}

.pt-\[56\%\] {
    padding-top: 56%
}

.pl-5 {
    padding-left: 1.25rem
}

.text-left {
    text-align: left
}

.text-center {
    text-align: center
}

.text-xs {
    font-size: .75rem;
    line-height: 1rem
}

.text-2xl {
    font-size: 1.5rem;
    line-height: 2rem
}

.text-sm {
    font-size: .875rem;
    line-height: 1.25rem
}

.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem
}

.text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem
}

.text-base {
    font-size: 1rem;
    line-height: 1.5rem
}

.text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem
}

.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem
}

.font-semibold {
    font-weight: 600
}

.font-bold {
    font-weight: 700
}

.font-medium {
    font-weight: 500
}

.font-normal {
    font-weight: 400
}

.uppercase {
    text-transform: uppercase
}

.leading-6 {
    line-height: 1.5rem
}

.tracking-tight {
    letter-spacing: -.025em
}

.text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity))
}

.text-blue-500 {
    --tw-text-opacity: 1;
    color: rgb(59 130 246 / var(--tw-text-opacity))
}

.text-gray-200 {
    --tw-text-opacity: 1;
    color: rgb(229 231 235 / var(--tw-text-opacity))
}

.text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity))
}

.text-red-600 {
    --tw-text-opacity: 1;
    color: rgb(220 38 38 / var(--tw-text-opacity))
}

.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity))
}

.text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity))
}

.text-yellow-400 {
    --tw-text-opacity: 1;
    color: rgb(250 204 21 / var(--tw-text-opacity))
}

.text-gray-300 {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity))
}

.text-gray-700 {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity))
}

.text-blue-600 {
    --tw-text-opacity: 1;
    color: rgb(37 99 235 / var(--tw-text-opacity))
}

.text-gray-900 {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity))
}

.text-gray-800 {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity))
}

.placeholder-gray-400::-moz-placeholder {
    --tw-placeholder-opacity: 1;
    color: rgb(156 163 175 / var(--tw-placeholder-opacity))
}

.placeholder-gray-400::placeholder {
    --tw-placeholder-opacity: 1;
    color: rgb(156 163 175 / var(--tw-placeholder-opacity))
}

.opacity-0 {
    opacity: 0
}

.opacity-100 {
    opacity: 1
}

.opacity-95 {
    opacity: .95
}

.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / .1), 0 4px 6px -4px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.shadow {
    --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.transition {
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(.4, 0, .2, 1);
    transition-duration: .15s
}

.duration-200 {
    transition-duration: .2s
}

.duration-150 {
    transition-duration: .15s
}

.ease-out {
    transition-timing-function: cubic-bezier(0, 0, .2, 1)
}

.ease-in {
    transition-timing-function: cubic-bezier(.4, 0, 1, 1)
}

body {
    font-family: Montserrat, sans-serif
}

.last\:border-b-0:last-child {
    border-bottom-width: 0px
}

.last\:pb-0:last-child {
    padding-bottom: 0
}

.hover\:translate-x-0\.5:hover {
    --tw-translate-x: .125rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.hover\:translate-x-0:hover {
    --tw-translate-x: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.hover\:bg-blue-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(37 99 235 / var(--tw-bg-opacity))
}

.hover\:bg-gray-200:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity))
}

.hover\:bg-blue-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(29 78 216 / var(--tw-bg-opacity))
}

.hover\:bg-gray-100:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity))
}

.hover\:bg-gray-50:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity))
}

.hover\:text-blue-700:hover {
    --tw-text-opacity: 1;
    color: rgb(29 78 216 / var(--tw-text-opacity))
}

.hover\:text-gray-900:hover {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity))
}

.hover\:underline:hover {
    text-decoration-line: underline
}

.focus\:border-gray-500:focus {
    --tw-border-opacity: 1;
    border-color: rgb(107 114 128 / var(--tw-border-opacity))
}

.focus\:border-blue-500:focus {
    --tw-border-opacity: 1;
    border-color: rgb(59 130 246 / var(--tw-border-opacity))
}

.focus\:border-indigo-500:focus {
    --tw-border-opacity: 1;
    border-color: rgb(99 102 241 / var(--tw-border-opacity))
}

.focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px
}

.focus\:ring-0:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
}

.focus\:ring-2:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
}

.focus\:ring-blue-500:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity))
}

.focus\:ring-indigo-500:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity))
}

.focus\:ring-offset-2:focus {
    --tw-ring-offset-width: 2px
}

.group:hover .group-hover\:translate-x-0\.5 {
    --tw-translate-x: .125rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.group:hover .group-hover\:translate-x-0 {
    --tw-translate-x: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

@media (min-width: 640px) {
    .sm\:mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .sm\:block {
        display: block
    }

    .sm\:flex {
        display: flex
    }

    .sm\:w-full {
        width: 100%
    }

    .sm\:max-w-md {
        max-width: 28rem
    }

    .sm\:rounded-lg {
        border-radius: .5rem
    }

    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .sm\:px-10 {
        padding-left: 2.5rem;
        padding-right: 2.5rem
    }

    .sm\:text-sm {
        font-size: .875rem;
        line-height: 1.25rem
    }
}

@media (min-width: 768px) {
    .md\:fixed {
        position: fixed
    }

    .md\:sticky {
        position: sticky
    }

    .md\:top-16 {
        top: 4rem
    }

    .md\:top-20 {
        top: 5rem
    }

    .md\:top-14 {
        top: 3.5rem
    }

    .md\:-bottom-20 {
        bottom: -5rem
    }

    .md\:left-12 {
        left: 3rem
    }

    .md\:col-span-1 {
        grid-column: span 1 / span 1
    }

    .md\:col-span-3 {
        grid-column: span 3 / span 3
    }

    .md\:m-0 {
        margin: 0
    }

    .md\:mx-36 {
        margin-left: 9rem;
        margin-right: 9rem
    }

    .md\:mx-20 {
        margin-left: 5rem;
        margin-right: 5rem
    }

    .md\:my-8 {
        margin-top: 2rem;
        margin-bottom: 2rem
    }

    .md\:mb-0 {
        margin-bottom: 0
    }

    .md\:mt-20 {
        margin-top: 5rem
    }

    .md\:ml-4 {
        margin-left: 1rem
    }

    .md\:block {
        display: block
    }

    .md\:flex {
        display: flex
    }

    .md\:hidden {
        display: none
    }

    .md\:h-\[500px\] {
        height: 500px
    }

    .md\:w-36 {
        width: 9rem
    }

    .md\:w-10\/12 {
        width: 83.333333%
    }

    .md\:w-3\/5 {
        width: 60%
    }

    .md\:w-9\/12 {
        width: 75%
    }

    .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .md\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr))
    }

    .md\:grid-cols-5 {
        grid-template-columns: repeat(5, minmax(0, 1fr))
    }

    .md\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
    }

    .md\:flex-row {
        flex-direction: row
    }

    .md\:justify-between {
        justify-content: space-between
    }

    .md\:gap-8 {
        gap: 2rem
    }

    .md\:gap-6 {
        gap: 1.5rem
    }

    .md\:self-start {
        align-self: flex-start
    }

    .md\:overflow-hidden {
        overflow: hidden
    }

    .md\:px-20 {
        padding-left: 5rem;
        padding-right: 5rem
    }

    .md\:text-3xl {
        font-size: 1.875rem;
        line-height: 2.25rem
    }
}

@media (min-width: 1024px) {
    .lg\:col-span-2 {
        grid-column: span 2 / span 2
    }

    .lg\:col-span-1 {
        grid-column: span 1 / span 1
    }

    .lg\:ml-5 {
        margin-left: 1.25rem
    }

    .lg\:block {
        display: block
    }

    .lg\:h-40 {
        height: 10rem
    }

    .lg\:w-72 {
        width: 18rem
    }

    .lg\:w-auto {
        width: auto
    }

    .lg\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr))
    }

    .lg\:grid-cols-6 {
        grid-template-columns: repeat(6, minmax(0, 1fr))
    }

    .lg\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
    }

    .lg\:space-y-0>:not([hidden])~:not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse))
    }

    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
    }
}
</style>

<div class="w-full px-6 mb-20 md:px-20">
    <!---->
    <div class="w-full">
        <div
            class="mb-28 pt-60 -m-3 rounded-b-2xl relative bg-cover bg-center bg-no-repeat bg-[url('https://assets.laracasts.com/images/wallpapers/thumbnails/inspire-me.png')]">
            <div class="absolute flex flex-col top-44 left-28 md:-bottom-20 md:left-12 md:flex-row"><img
                    src="https://ui-avatars.com/api/?name=<?= $_SESSION['username']['name'] ?>"
                    alt="<?= $_SESSION['username']['name'] ?>" class="border-2 border-white rounded-full w-28 md:w-36">
                <h2 class="mt-2 -ml-6 text-2xl font-bold md:mt-20 md:ml-4"><?= $_SESSION['username']['name'] ?></h2>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-5 md:gap-6">
            <div class="col-span-2 mb-6 md:mb-0">
                <div class="w-full p-4 rounded-lg shadow">
                    <h3 class="text-lg font-bold">Thông tin</h3>
                    <div class="mt-3 text-sm">
                        Tên: <?= $_SESSION['username']['name'] ?>
                        <br>
                        Email: <?= $_SESSION['username']['email'] ?>
                    </div>
                </div>
            </div>
            <div class="col-span-3">
                <h3 class="text-lg font-bold">Khoá học đã tham gia</h3>
                <?php foreach ($data as $key => $value) { ?>
                <div class="p-5 rounded-lg shadow">
                    <ul class="mt-3 space-y-5">
                        <li class="flex pb-5 border-b last:border-b-0 last:pb-0">
                            <img src="<?php echo $value['img'] ?>" alt="Hình <?php echo $value['name'] ?>"
                                class="w-1/3 rounded-xl">
                            <div class="ml-3">
                                <h2 class="mb-1 font-bold"><a
                                        href="<?php echo base_url; ?>ttkhoahoc/<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                                </h2>
                                <p class="text-sm"><?php echo $value['mo_ta'] ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>