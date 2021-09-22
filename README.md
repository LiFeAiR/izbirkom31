# Izbirkom Parser

После прогона данных с избиркома через эти репозитории:
https://github.com/illusionofchaos/IzbirkomRipper
https://github.com/ulex/izbirkom21

мы получили много html страниц
чтобы преобразовать их в некое подобие базы
можно воспользоваться моим репозиторием
в итоге получается что то подобное:
```
{
    "header": "ЦИК России",
    "breadcrumb": [
        "ЦИК России"
    ],
    "rows": [
        {
            "key": "1",
            "desc": "Число избирателей, внесенных в список избирателей на момент окончания голосования",
            "values": [
                "109092610"
            ]
        },
        {
            "key": "2",
            "desc": "Число избирательных бюллетеней, полученных участковой избирательной комиссией",
            "values": [
                "99437604"
            ]
        },
        {
            "key": "3",
            "desc": "Число избирательных бюллетеней, выданных избирателям, проголосовавшим досрочно",
            "values": [
                "199636"
            ]
        },
        {
            "key": "4",
            "desc": "Число избирательных бюллетеней, выданных в помещении для голосования в день голосования",
            "values": [
                "48092540"
            ]
        },
        {
            "key": "5",
            "desc": "Число избирательных бюллетеней, выданных вне помещения для голосования в день голосования",
            "values": [
                "8126971"
            ]
        },
        {
            "key": "6",
            "desc": "Число погашенных избирательных бюллетеней",
            "values": [
                "43017762"
            ]
        },
        {
            "key": "7",
            "desc": "Число избирательных бюллетеней, содержащихся в переносных ящиках для голосования",
            "values": [
                "8319048"
            ]
        },
        {
            "key": "8",
            "desc": "Число избирательных бюллетеней, содержащихся в стационарных ящиках для голосования",
            "values": [
                "47943790"
            ]
        },
        {
            "key": "9",
            "desc": "Число недействительных избирательных бюллетеней",
            "values": [
                "1169513"
            ]
        },
        {
            "key": "10",
            "desc": "Число действительных избирательных бюллетеней",
            "values": [
                "55093325"
            ]
        },
        {
            "key": "11",
            "desc": "Число утраченных избирательных бюллетеней",
            "values": [
                "1211"
            ]
        },
        {
            "key": "12",
            "desc": "Число избирательных бюллетеней, не учтенных при получении",
            "values": [
                "516"
            ]
        },
        {
            "key": "13",
            "desc": "1. Политическая партия \"КОММУНИСТИЧЕСКАЯ ПАРТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ\"",
            "values": [
                "10650752",
                "18.93%"
            ]
        },
        {
            "key": "14",
            "desc": "2. Политическая партия \"Российская экологическая партия \"ЗЕЛЁНЫЕ\"",
            "values": [
                "511831",
                "0.91%"
            ]
        },
        {
            "key": "15",
            "desc": "3. Политическая партия ЛДПР – Либерально-демократическая партия России",
            "values": [
                "4245051",
                "7.55%"
            ]
        },
        {
            "key": "16",
            "desc": "4. Политическая партия \"НОВЫЕ ЛЮДИ\"",
            "values": [
                "2995157",
                "5.32%"
            ]
        },
        {
            "key": "17",
            "desc": "5. Всероссийская политическая партия \"ЕДИНАЯ РОССИЯ\"",
            "values": [
                "28027351",
                "49.82%"
            ]
        },
        {
            "key": "18",
            "desc": "6. Партия СПРАВЕДЛИВАЯ РОССИЯ – ЗА ПРАВДУ",
            "values": [
                "4198979",
                "7.46%"
            ]
        },
        {
            "key": "19",
            "desc": "7. Политическая партия \"Российская объединенная демократическая партия \"ЯБЛОКО\"",
            "values": [
                "751773",
                "1.34%"
            ]
        },
        {
            "key": "20",
            "desc": "8. Всероссийская политическая партия \"ПАРТИЯ РОСТА\"",
            "values": [
                "290994",
                "0.52%"
            ]
        },
        {
            "key": "21",
            "desc": "9. Политическая партия РОССИЙСКАЯ ПАРТИЯ СВОБОДЫ И СПРАВЕДЛИВОСТИ",
            "values": [
                "431000",
                "0.77%"
            ]
        },
        {
            "key": "22",
            "desc": "10. Политическая партия КОММУНИСТИЧЕСКАЯ ПАРТИЯ КОММУНИСТЫ РОССИИ",
            "values": [
                "715208",
                "1.27%"
            ]
        },
        {
            "key": "23",
            "desc": "11. Политическая партия \"Гражданская Платформа\"",
            "values": [
                "86836",
                "0.15%"
            ]
        },
        {
            "key": "24",
            "desc": "12. Политическая партия ЗЕЛЕНАЯ АЛЬТЕРНАТИВА",
            "values": [
                "357447",
                "0.64%"
            ]
        },
        {
            "key": "25",
            "desc": "13. ВСЕРОССИЙСКАЯ ПОЛИТИЧЕСКАЯ ПАРТИЯ \"РОДИНА\"",
            "values": [
                "450021",
                "0.80%"
            ]
        },
        {
            "key": "26",
            "desc": "14. ПАРТИЯ ПЕНСИОНЕРОВ",
            "values": [
                "1380925",
                "2.45%"
            ]
        }
    ]
}
```