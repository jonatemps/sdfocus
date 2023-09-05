UPDATE users
SET created_at = '2023-08-23 11:06:13', updated_at = '2023-08-23 11:06:13'
WHERE id > 8

-------------------------------------------------------------------------------------------

UPDATE users
SET permissions = '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "0", "platform.systems.tshangu": "0", "platform.systems.bandundu": "0", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}'
WHERE id > 8

---------------------------------------------------------------------------------------------

UPDATE dcm_evaluations
SET rea_etopup = FLOOR(1 + RAND() * 370),rea_cico = FLOOR(1 + RAND() * 370)
WHERE rea_etopup = 0 AND rea_etopup = 0

-----------------------------------------------------------------------------------------------
