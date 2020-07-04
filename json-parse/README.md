
# Inserts missing quotes in json, then parse it.

[Input](res.json) Provided:
```
{
Name: "hisComListResponse",
Data: {
TotalCount: 51,
PageNo: 1,
PageSize: 100,
list: [
{
SnapTime: "2020-07-01 18:42:06",
Name: "DB MUNDRA",
UserID: "E100040"
},
{
SnapTime: "2020-07-01 18:41:43",
Name: "DB MUNDRA",
UserID: "E100040"
}
]
},
Code: 1,
Message: "Succeed"
}
```

[File](parse.php) Output (Users List):

```
DB MUNDRA
DB MUNDRA

```
