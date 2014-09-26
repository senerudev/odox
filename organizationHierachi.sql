SELECT t1.description AS lev1, t2.description as lev2, t3.description as lev3, t4.description as lev4
FROM hierarchy AS t1
LEFT JOIN hierarchy AS t2 ON t2.Parent_hierachyId = t1.hierachyId
LEFT JOIN hierarchy AS t3 ON t3.Parent_hierachyId = t2.hierachyId
LEFT JOIN hierarchy AS t4 ON t4.Parent_hierachyId = t3.hierachyId
WHERE t1.Parent_hierachyId =4
