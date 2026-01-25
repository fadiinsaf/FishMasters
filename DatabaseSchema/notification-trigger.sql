CREATE OR REPLACE FUNCTION notify_follow()
    RETURNS TRIGGER AS $$
DECLARE
    target_name TEXT;
BEGIN
    -- Optional: fetch target name to personalize notification
    IF NEW.type_table = 'fisherman' THEN
        SELECT CONCAT('Fisherman ', f.club, ' (', f.region, ')') INTO target_name
        FROM fisherman f
        WHERE f.id_user = NEW.id_target;
    ELSIF NEW.type_table = 'team' THEN
        SELECT t.name INTO target_name
        FROM team t
        WHERE t.id_team = NEW.id_target;
    ELSIF NEW.type_table = 'competition' THEN
        SELECT c.title INTO target_name
        FROM competition c
        WHERE c.id_competition = NEW.id_target;
    ELSE
        target_name := 'Unknown';
    END IF;

    -- Insert notification
    INSERT INTO notification (
        fan_id,
        title,
        message,
        id_target,
        type_target
    ) VALUES (
                 NEW.fan_id,
                 'New Follow',
                 CONCAT('You are now following ', target_name),
                 NEW.id_target,
                 NEW.type_table
             );

    RETURN NEW;
END;
$$ LANGUAGE plpgsql;
