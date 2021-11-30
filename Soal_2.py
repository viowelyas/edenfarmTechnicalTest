data = [
  {'type':"Foo", 'year':1995},
  {'type':"Bar", 'year':1993},
  {'type':"Foobar", 'year':2020}
];

sortedData = sorted(data, key=lambda d: d['year']) 

print(sortedData)