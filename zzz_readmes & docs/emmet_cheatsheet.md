# Emmet Cheat Sheet (Markdown)

## ✨ Grundlagen

| Abkürzung        | Ergebnis                  |
| ---------------- | ------------------------- |
| `div`            | `<div></div>`             |
| `.box`           | `<div class="box"></div>` |
| `#header`        | `<div id="header"></div>` |
| `ul>li`          | `<ul><li></li></ul>`      |
| `nav>ul>li*3`    | Liste mit 3 `<li>`        |
| `h1{Titel}`      | `<h1>Titel</h1>`          |
| `a[href="/"]`    | `<a href="/"></a>`        |
| `input:checkbox` | `<input type="checkbox">` |

---

## 🔄 Multiplikatoren & Variablen

| Abkürzung       | Ergebnis                                                         |
| --------------- | ---------------------------------------------------------------- |
| `ul>li.item$*3` | `<li class="item1">`, `<li class="item2">`, `<li class="item3">` |
| `div#id$*2`     | `<div id="id1"></div><div id="id2"></div>`                       |
| `p*3{Text $}`   | `<p>Text 1</p><p>Text 2</p><p>Text 3</p>`                        |

---

## 🔄 Siblings & Nesting

| Abkürzung                   | Ergebnis                                          |
| --------------------------- | ------------------------------------------------- |
| `header+main+footer`        | `<header></header><main></main><footer></footer>` |
| `div>(header+main+footer)`  | Alles innerhalb eines `<div>`                     |
| `ul>li*3>a[href=#]{Link $}` | Linkliste                                         |

---

## 🔄 Gruppieren mit Klammern

| Abkürzung                    | Ergebnis                       |
| ---------------------------- | ------------------------------ |
| `div>(h1+p)`                 | `<div><h1></h1><p></p></div>`  |
| `section>(h2.title+ul>li*2)` | Titel mit Liste in `<section>` |

---

## 💡 Typische Kombinationen

| Abkürzung                                     | Ergebnis (Beispiel)        |
| --------------------------------------------- | -------------------------- |
| `.hero>h1.title{Willkommen}+p.sub{Intro}`     | Hero mit Titel + Subline   |
| `.card>img[src=#]+.content>h2{Titel}+p{Text}` | Card mit Bild, Titel, Text |
| `.row>.col*3`                                 | Drei Spalten nebeneinander |

---

## 🛠️ Formulare

| Abkürzung                              | Ergebnis                                                |
| -------------------------------------- | ------------------------------------------------------- |
| `form>input:text+input:submit`         | `<form><input type="text"><input type="submit"></form>` |
| `label[for=name]{Name}` + `input#name` | `<label for="name">Name</label><input id="name">`       |

---

## 🎨 CSS Emmet

| Abkürzung | Ergebnis              |
| --------- | --------------------- |
| `m10`     | `margin: 10px;`       |
| `p10-20`  | `padding: 10px 20px;` |
| `bgc`     | `background-color: ;` |
| `d:n`     | `display: none;`      |

---

## 📃 Konfiguration in VS Code

```json
"emmet.includeLanguages": {
  "twig": "html",
  "php": "html"
}
```

Damit wird Emmet auch in `.twig` und `.php` Dateien aktiviert.

---

**Tipp:** Gib einfach z. B. `div.wrapper>h1{Hallo}` ein und drück `Tab` — der Code wird automatisch erzeugt.

Wenn du magst, erstelle ich dir auch eine PDF-Version davon.

